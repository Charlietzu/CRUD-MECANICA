<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
   protected $table = 'orcamentos';
   protected $fillable = ['cliente', 'data', 'vendedor', 'descricao', 'valor'];
   protected $guarded = ['id', 'created_at', 'updated_at'];
}
