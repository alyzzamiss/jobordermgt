<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppDetail extends Model
{
     //Table Name
     protected $table = 'app_details';
     //Primary Key
     public $primaryKey = 'id';
     //
     public $timestamps = true;

     public function joborder(){
          return $this->belongsTo('App\JobOrder');
      }
}
