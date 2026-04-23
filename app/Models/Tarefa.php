<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categoria;

class Tarefa extends Model
{
    protected $fillable = ['titulo','descricao','prioridade','status','user_id'];
    
    public function user(){
        return $this->belongsTo(User::class); 
    }
    public function categorias(){
        return $this->belongsToMany(Categoria::class, 'tarefa_has_categorias');
    }
}
