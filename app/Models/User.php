<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='username';
	public $timestamps = false;
	public function AllUsers(){
		$all_users=Username::get();
		return $all_users;
	}
	public function CheckUser($user, $mail, $pw){
		$user_check=Username::where(
		['user', '=', $user],
		['mail', '=', $mail],
		['pw', '=', $pw])->get();
		return $user_check;
	}
	public function NewUser($user, $mail, $pw){
		$user_insert=Username::insertGetId(['user'=>$user,'mail'=>$mail,'pw'=>$pw]);
		return $user_insert;
	}
}
?>