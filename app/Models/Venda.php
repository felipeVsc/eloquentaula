<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = 'venda';

    protected $primary_key = 'id_venda';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        id_pedido,
        id_cliente,
        valor_venda

    ];
}
