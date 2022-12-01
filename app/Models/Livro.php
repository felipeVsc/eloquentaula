<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Editora;
class Livro extends Model
{
    use HasFactory;
    protected $table = 'livro';

    protected $primaryKey = 'id_livro';
    public $incrementing = TRUE;
    
    public $timestamps = false;

    protected $fillable = [
        "titulo_livro",
        "id_editora"
    ];


    public function editora()
    {
        return $this->belongsTo(Editora::class, 'id_livro', 'id_editora');
    }
}
