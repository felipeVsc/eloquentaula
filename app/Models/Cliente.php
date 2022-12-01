<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';

    protected $primaryKey = 'id_cliente';

    public $timestamps = false;

    protected $fillable = [
        "nome_cliente",
        "id_endereco"
    ];

    public function endereco(){
        return $this->hasOne(Endereco::class, 'id_endereco', 'id_endereco');
        
    }
}
