<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use App\Models\Pessoa;

class LoginController extends Controller
{

    public function login(){
        if (Auth::check()){
            return view('home');
        }
        return view('login');
    }

    public function doLogin(Request $request){
        $credentials = $request->only('cpf','password');

        if (Auth::attempt($credentials, true)){
            $data = [
                'user' => Auth::user()
            ];

            session($data);

            Log::info("User logged: {$data['user']->nome}");
            
            return view('home');
        }
        return redirect()->route('show-login')->withErrors(['message' => 'Usuarios ou senha incorretos']);
    }
    
    public function doLogout(){
        $user = Auth::user();

        Log::info("User logged out: {$user->nome}");
        Auth::logout();
        return redirect()->route('home');
    }
}
