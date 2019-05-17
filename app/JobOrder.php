<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobOrder extends Model
{
    //Table Name
    protected $table = 'job_orders';
    //Primary Key
    public $primaryKey = 'id';
    //
    public $timestamps = true;
    //model relationship
    public function appdetail(){
        return $this->belongsTo('App\AppDetail');
    }

    public function account(){
        return $this->belongsTo('App\Account');
    }

}
