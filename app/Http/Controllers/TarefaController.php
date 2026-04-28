<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function home()
    {
        $tarefas = [
            ['categoria' => 'Compras', 'titulo' => 'Fazer compras', 'descricao' => 'Ir ao mercado', 'prioridade' => 'alta'],
            ['categoria' => 'Estudos', 'titulo' => 'Estudar Laravel', 'descricao' => 'Revisar controllers e rotas', 'prioridade' => 'alta'],
            ['categoria' => 'Saúde', 'titulo' => 'Caminhar', 'descricao' => '30 minutos pela manhã', 'prioridade' => 'baixa'],
            ['categoria' => 'Trabalho', 'titulo' => 'Reunião com equipe', 'descricao' => 'Reunião às 14h na sala 3', 'prioridade' => 'média'],
            ['categoria' => 'Finanças', 'titulo' => 'Pagar contas', 'descricao' => 'Pagar boletos do mês', 'prioridade' => 'alta'],
            ['categoria' => 'Casa', 'titulo' => 'Limpar a casa', 'descricao' => 'Aspirar e passar pano', 'prioridade' => 'baixa'],
            ['categoria' => 'Família', 'titulo' => 'Ligar para os pais', 'descricao' => 'Ligar no final da tarde', 'prioridade' => 'média'],
        ];

        return view('telasPrincipais.home', compact('tarefas'));
    }

    public function pesquisa()
    {
        return view('telasPrincipais.pesquisa');
    }
}