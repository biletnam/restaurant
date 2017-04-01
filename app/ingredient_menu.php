<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingredient_menu extends Model
{
  // public function menus()
  // {
  //   return $this->belongsToMany(menu::class);
  // }

  public function menus()
  {
    return $this->belongsTo(menus::class);
  }

  public function ingredients()
  {
    return $this->hasMany(ingredients::class);
  }

}
