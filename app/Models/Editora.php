<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livro;

class Editora extends Model
{
    use HasFactory;
    protected $table = 'editora';

    protected $primaryKey = 'id_editora';
    public $incrementing = TRUE;

    public $timestamps = false;

    protected $fillable = [
        "nome_editora"
    ];

    public function livro(){
        return $this->hasMany(Livro::class, 'id_editora', 'id_editora');
        
    }
    
}
