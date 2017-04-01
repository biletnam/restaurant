<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredient extends Model
{
  protected $fillable= ['ingregient'];

  public function ingredient_menus()
  {
    return $this->belongsTo(ingredient_menus::class);
  }

}
