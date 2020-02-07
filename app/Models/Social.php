<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
	protected $table='user';
	public $timestamps = false;
	public function User(){
		$users=User::get();
		return $users;
	}
	
}
?>