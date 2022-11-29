<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $table = 'livro';

    protected $primary_key = 'id_livro';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        titulo_livro,
        id_editora

    ];
}
