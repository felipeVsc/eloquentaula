<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    protected $table = 'endereco';

    protected $primaryKey = 'id_endereco';
    public $incrementing = TRUE;    
    
    public $timestamps = false;

    protected $fillable = [
        "rua_endereco",
       "cidade_endereco"
    ];


}
