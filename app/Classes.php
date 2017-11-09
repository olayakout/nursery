<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    public static function getAllClasses(){
    	return Classes::all();
    }
}
