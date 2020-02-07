<?php
namespace App\Http\Controllers;

use App\Models\Social as SocialUser;
use App\Models\User as AllUser;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialUser extends Controller{
	function CheckIn(AllUser $users){
		$user=$users->User();
		return view ('auth.login'
		
	}
}
?>