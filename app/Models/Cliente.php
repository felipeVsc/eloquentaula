<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $primary_key = 'id_cliente';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        nome_cliente,
        id_endereco

    ];
}
