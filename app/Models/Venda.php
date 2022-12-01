<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = 'venda';

    protected $primaryKey = 'id_venda';

    public $timestamps = false;

    protected $fillable = [
        "id_pedido",
        "id_cliente",
        "valor_venda"
    ];
}
