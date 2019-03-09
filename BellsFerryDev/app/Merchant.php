<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $table = "merchants";
    protected $fillable = ["name", "icon"];

    public function products() {
        return $this->belongsToMany('App\Product');
    }
}
