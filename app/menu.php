<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
  protected $fillable=['name','price','weight','category','image'];

  // public function ingredients()
  // {
  //   return $this->belongsToMany('App\ingredient', 'ingredient_menu', 'menu_id', 'ingredient_id');
  // }

  public function ingredient_menus()
  {
    return $this->hasMany(ingredient_menus::class);
  }

}
