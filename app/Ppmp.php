<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ppmp extends Model
{
    //Table Name
    protected $table = 'ppmps';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
