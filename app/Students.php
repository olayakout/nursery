<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Classes;
class Students extends Model
{
	   protected $guarded=['_token'];

	   public function getClass($class_id){
	   		return Classes::find($class_id);
	   }

}
