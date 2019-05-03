<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppmp_item extends Model
{
   //Table Name
   protected $table = 'ppmp_items';
   //Primary Key
   public $primaryKey = 'id';
   //Timestamps
   public $timestamps = true;
}
