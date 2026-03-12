<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    protected $allowedIps = [
        '127.0.0.1',         // localhost
        '10.172.93.136',     // your IP
        '192.168.0.188', 
    ];

    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || !$user->is_admin) {
            return redirect()->route('admin.login');
        }

        if (!in_array($request->ip(), $this->allowedIps)) {
            abort(403, 'Access denied.');
        }

        return $next($request);
    }
}
