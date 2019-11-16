<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
   protected $fillable = ['cliente', 'data-hora', 'vendedor', 'descricao', 'valor'];
   protected $guarded = ['id', 'created_at', 'updated_at'];
   protected $table = 'orcamentos';
}
