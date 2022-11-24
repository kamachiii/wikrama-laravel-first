<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index', [
            'title' => 'Login',
        ]);
    }

    public function store(Request $request){
        $login = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->intended(route('index'));
        }

        return back()->with('error', 'Login gagal! Silahkan coba lagi');
    }
}
