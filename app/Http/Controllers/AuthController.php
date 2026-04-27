<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function cadastro()
    {
        return view('auth.cadastro');
    }
    public function entrar()
    {
        return redirect()->route('home');
    }
    public function registrar()
    {
        return redirect()->route('home');
    }
}