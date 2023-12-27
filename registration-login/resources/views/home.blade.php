<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome!</h1>
	<p>You are now logged in.</p>
	@if (count($users) > 0)
		<h2>Users who have logged in:</h2>
		<ul>
			@foreach ($users as $user)
				<li>{{ $user->name }}</li>
			@endforeach
		</ul>
	@endif
</body>
</html>





