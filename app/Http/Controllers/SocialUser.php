<?php
namespace App\Http\Controllers;

use App\User;
use App\Models\Social as AllSocialUsers;
use App\Models\User as AddUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialUser extends Controller{
	//Создана форма
	function Form(){
		return view('form.insert',['user'=>'Login', 'mail'=>'Mail', 'pw'=>'Password']);
	}
	/*
	//Проверка работы метода модели - не работает
	function UserNew(Request $request){
		$new_user=new User;
		
		$new_user->user=$request->user;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		$new_user->mail=$request->mail;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		$new_user->pw=$request->pw;//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		
		$new_user->save();//https://laravel.ru/docs/v5/eloquent#%D1%83%D1%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%8F
		return view('form.insert', ['user'=>$new_user['user'], 'mail'=>$new_user['mail'], 'pw'=>$new_user['pw']]);
	}
	*/
	
	//Контроллер для добавления строки в таблицу
	function UserNew(Request $request, AddUser $new_user){
		$user=$request->input('user');//Получение имени
		$mail=$request->input('mail');//Получение адреса
		$pw=$request->input('pw');//Получение пароля
		$user_new=$new_user->NewUser();//Вызов метода из модели для добавления новых данных в таблицу
		return view('form.insert', ['user'=>$user_new['user'], 'mail'=>$user_new['mail'], 'pw'=>$user_new['pw']]);
	}
	
	//Проверка работы метода модели
	function All(AddUser $user){
		$all=$user->AllUsers();
		return ($all);
	}
	/*
	
	function Store(Request $request, $user, $mail, $pw, AddUser $id,$new_user){
		$n_user=$request->input('user')->input('mail')->input('pw');
		$user_new=$new_user->NewUser($n_user);
		$insert_user=$new_user->AllUsers($id);
		return view ('form.insert',['user'=>$insert_user['user'],'mail'=>$insert_user['mail'], 'pw'=>$insert_user['pw']]);
	*/
	/*
	//Проверка работы метода модели
	public function CheckUser(Request $request, AddUser $user){
		$new_user=new SocialUser;
		
		$new_user->user='Ivon';
		$new_user->mail='klklklk';
		$new_user->pw='jjkjjkjjkj';
		
		$new_user->save();
		
		$all=$user->AllUsers();
		return ($all);
		
	}
	*/
		/*не работает данные???
		$user=$request->input('user');
		$mail=$request->input('mail');
		$pw=$request->input('pw');
		*/
		// $input=Request::all();
		// $user_new=$request->input->post(array('user', 'mail', 'pw'));
		/*
		$input=$request->input('user.mail.pw');
		return view('form.insert',['user'=>$input['user'],'mail'=>$input['mail'], 'pw'=>$input['pw']]);
		*/
		/*
		$input=$request->input('user'->$user, 'mail'->$mail, 'pw'->$pw);
		*/
		// $user_new=$this->input->post(array('user', 'mail', 'pw'));
		
		// $user=$input['user'];
		// $mail=$input['mail'];
		// $pw=$input['pw'];
		/*
		$insert_user=$new_user->NewUser($user, $mail, $pw);
		return view ('form.insert',['user'=>$insert_user['user'],'mail'=>$insert_user['mail'], 'pw'=>$insert_user['pw']]);
		*/
		// $user=$input['user'];
		// $mail=$input['mail'];
		// $pw=$input['pw'];
		// $insert_user=$new_user->NewUser($input);
		// $user=$input['user'];
		// $mail=$input['mail'];
		// $pw=$input['pw'];

	// $old_user=$users->CheckUser($user, $mail, $pw);
		// if($old_user==null){
			// $insert_user=array(
				// 'user'=>$user,
				// 'mail'=>$mail,
				// 'pw'=>$pw
			// );
			// $new_user=$insert_user->NewUser($user, $mail, $pw);
			// return $new_user;
		// }
	// if($input!=$old_user){
		// $new_user=$insert_user->NewUser($user, $mail, $pw);
		// return view('form.reg', ['user'=>$new_user['user'], 'mail'=>$new_user['mail'], 'pw'=>$new_user['pw']]);
	// $inputMail=$request->input('mail');
	// $inputPw=$request->input('pw');
	// $inputPw=Hash::get($inputPw);
	// $input=array(
	// 'user'=>$inputUser,
	// 'mail'=>$inputUser,
	// 'pw'=>$inputPw
	// );
	// $oldUser=$users->AllUsers($users);
	// foreach($oldUser as $allUsers){
		// if($allUsers!=$input){
			// $newUserInsert=$users->NewUser($input);
			// return view('form.reg',['user'=>$newUserInsert['user'], 'mail'=>$newUserInsert['mail'], 'pw'=>$newUserInsert['pw']] );
		// }else{
				// return 'Проверьте Ваши учетные данные';
		// }
		// }
	/*	
	}
	*/
}
?>