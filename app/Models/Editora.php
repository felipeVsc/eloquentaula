<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
    protected $table = 'editora';

    protected $primary_key = 'id_editora';

    public $timestamps = false;

    protected $fillablle = [
        // id_cliente,
        nome_editora,

    ];
}
