<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedido';

    protected $primary_key = 'id_pedido';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        id_livro

    ];
}
