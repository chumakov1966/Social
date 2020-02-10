<?php
namespace App\Http\Controllers;

use App\Models\Social as AllSocialUsers;
use App\Models\User as AddUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialUser extends Controller{
	function Store(Request $request, AddUser $users){
	$input=$request->input('user.mail.pw');
	$user=$input['user'];
	$mail=$input['mail'];
	$pw=$input['pw'];
	$old_user=$users->CheckUser($user, $mail, $pw);
	$insert_user=array(
	'user'=>$user,
	'mail'=>$mail,
	'pw'=>$pw
	)
	if($input!=$old_user){
		$new_user=$insert_user->NewUser($user, $mail, $pw);
		return view('form.reg', ['user'=>$new_user['user'], 'mail'=>$new_user['mail'], 'pw'=>$new_user['pw']]);
	}
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
		
	}

}
?>