<!DOCTYPE html>
<html>
<head>
<title>Регистрация</title>
</head>
	<form action="http://social" method="Post">
	
	<div>
		<input action="#" id="login" type="text" placeholder="{{$user}}">
	</div>
		<div>
		<input action="#" id="mail" type="email" placeholder="{{$mail}}">
	</div>
		<div>
		<input action="#" id="password" type="password" placeholder="{{$pw}}">
	</div>
	<div>
		<input type="submit" value="Авторизоваться">
	</div>
	{{ csrf_field() }} 
	</form>
</html>