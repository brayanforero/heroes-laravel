<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequestLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
   public function loggedIn(AuthRequestLogin $request)
   {
    $credentials = $request->validated();
    
    if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('heroes');
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.'
    ]); 
   }
}
