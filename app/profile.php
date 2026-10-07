<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Profile</h1>

<p>Username: <?= esc($user['username']) ?></p>
<p>Full Name: <?= esc($user['full_name']) ?></p>
<p>Email: <?= esc($user['email']) ?></p>
<p>Created At: <?= esc($user['created_at']) ?></p>

</body>
</html>