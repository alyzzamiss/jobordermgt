<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
        //Table Name
        protected $table = 'accounts';
        //Primary Key
        public $primaryKey = 'id';
        //
        public $timestamps = true;
}
