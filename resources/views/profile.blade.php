<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile Page</h1>
    <p>Welcome, {{ session('user')['username'] }}</p>
    <a href="{{ route('logout') }}">Logout</a>
</body>
</html>