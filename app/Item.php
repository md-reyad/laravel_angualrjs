<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Item extends Model
{
      protected $table = "Items";
    public $fillable = ['title','description'];

}
