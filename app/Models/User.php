<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='users_name';
	public $timestamps = false;
	public function User($user, $mail, $pw){
		$user_insert=User_name::insert(['user'=>$user],['mail'=>$mail],['pw'=>$pw]);
		return $user_insert;
		
	}
}
?>