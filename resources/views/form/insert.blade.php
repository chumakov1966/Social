<!DOCTYPE html>
<html>
<head>
	<title>Форма</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
</head> 

	<form action="http://social/{{$user}}/{{$mail}}/{{$pw}}" method="Post">
		{{ csrf_field() }}
	<div>
		<input  id="login" name ="user"  type="text" placeholder="{{$user}}" value="{{$user}}">
	</div>
	<div>
		<input  id="mail" name="mail" type="email" placeholder="{{$mail}}" value="{{$mail}}">
	</div>
	<div>
		<input  id="password"name="pw" type="password" placeholder="{{$pw}}" value="{{$pw}}">
	</div>
	<div>
		<input type="submit" value="Авторизоваться">
	</div>

	</form>
</html>