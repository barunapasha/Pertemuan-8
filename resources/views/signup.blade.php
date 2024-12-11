<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up Page</h1>
    <form method="POST" action="{{ route('signup.process') }}">
        @csrf
        <input type="text" name="username" placeholder="Username">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>