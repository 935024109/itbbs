<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ITBBS</title>
</head>
<body>
	{{ csrf_field() }}
	<h1>欢迎 {{ $user }} </h1>
	<a href="http://web.com/home/user/register/changestatus/{{ $id }}/{{ $token }}">哈哈哈</a>
</body>
</html>