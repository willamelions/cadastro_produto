<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'produto';

    protected $fillable = [
        'nome', 
        'descricao', 
        'quantidade',
        'preco'
    ];
}
