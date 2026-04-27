<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function home()
    {
        return view('tarefas.home');
    }
    public function pesquisa()
    {
        return view('tarefas.pesquisa');
    }
}