<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function store(Request $request)
    {
        $value = $request->input('choice'); 

        return response()->json(['status' => 'saved'])
            ->cookie(
                'accept_cookies',
                $value,
                60 * 24 * 365, 
                '/',
                null,
                false,      
                true,      
                false,
                'Lax'
            );
    }
}