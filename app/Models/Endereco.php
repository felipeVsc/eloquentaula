<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
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

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_endereco', 'id_cliente');
    }


}
