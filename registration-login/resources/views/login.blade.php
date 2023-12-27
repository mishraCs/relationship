<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>Login</h1>
	<form method="POST" action="{{ route('login') }}">
		@csrf
		<label for="email">Email:</label>
		<input type="email" name="email" id="email" required>
		<br>
		<label for="password">Password:</label>
		<input type="password" name="password" id="password" required>
		<br>
		<button type="submit">Login</button>
	</form>
	<p>Not registered yet? <a href="{{ route('register') }}">Register here</a>.</p>
</body>
</html>
