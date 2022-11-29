<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'endereco';

    protected $primary_key = 'id_endereco';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        rua_endereco,
        cidade_endereco

    ];
}
