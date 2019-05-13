<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bebida extends Model
{
  protected $fillable = [
  'descricao', 'preco'
  ];
}
