<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
	protected $table='username';
	public $timestamps = false;
	public function AllUsers(){
		$all_users=$this->get();
		return $all_users;
	}
	// public function CheckUser($user, $mail, $pw){
		// $user_check=$this->where(
		// ('user', '=', $user),
		// ('mail', '=', $mail),
		// ('pw', '=', $pw))->get();
		// return $user_check;
	// }
	// public function NewUser($user, $mail, $pw){
		// $user_insert=$this->where('user', $user)->where('mail',$mail)->where('pw',$pw)->insertGetId(['user'=>$user,'mail'=>$mail,'pw'=>$pw]);
		// return $user_insert;
	// }
	//Создаю метод Eloquent для вставки в таблицу новых данных https://laravel.ru/posts/5
	public function NewUser(Request $request){
		$new_user=new User;
		
		$new_user->user=$request->user;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		$new_user->mail=$request->mail;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		$new_user->pw=$request->pw;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		
		$new_user->save();//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
	}
}

?>