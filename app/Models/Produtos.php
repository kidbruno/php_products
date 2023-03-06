<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $primaryKey = 'produto_id';

    public function categorias(){
        return $this->hasOne(Categorias::class, 'categoria_id', 'categoria_id');
    }
}
