<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403, 'Acesso não autorizado.');
        }
    }

    public function index()
    {
        $usuarios = User::all();

        return view('telasPrincipais.admin', compact('usuarios'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id)],
            'is_admin' => 'required|boolean',
        ]);

        try {
            if ($id == auth()->id() && !$request->is_admin) {
                session()->flash('erro', 'Você não pode remover seu próprio acesso de administrador.');
                return redirect()->route('admin');
            }

            $usuario = User::findOrFail($id);

            $usuario->name     = $request->name;
            $usuario->email    = $request->email;
            $usuario->is_admin = $request->is_admin;
            $usuario->save();

            session()->flash('msg', 'Usuário atualizado com sucesso!');
            return redirect()->route('admin');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao atualizar usuário: ' . $e->getMessage());
            return redirect()->route('admin');
        }
    }

    public function destroy($id)
    {
        try {
            if ($id == auth()->id()) {
                session()->flash('erro', 'Você não pode excluir sua própria conta por aqui.');
                return redirect()->route('admin');
            }

            $usuario = User::findOrFail($id);
            $usuario->delete();

            session()->flash('msg', 'Usuário excluído com sucesso!');
            return redirect()->route('admin');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao excluir usuário: ' . $e->getMessage());
            return redirect()->route('admin');
        }
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'is_admin' => 'required|boolean',
        ]);

        try {
            $usuario = new User();
            $usuario->name = $request->name;
            $usuario->email = $request->email;
            $usuario->password = $request->password;
            $usuario->is_admin = $request->is_admin;
            $usuario->save();

            session()->flash('msg', 'Usuário criado com sucesso!');
            return redirect()->route('admin');

        } catch (\Exception $e) {
            session()->flash('erro', 'Erro ao criar usuário: ' . $e->getMessage());
            return redirect()->route('admin');
        }
    }
}