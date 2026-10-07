<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>New Task</h1>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/tasks/create" method="post">

    <label>Title:</label><br>
    <input type="text" name="title" value="<?= old('title') ?>"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="pending">Pending</option>
        <option value="completed">Completed</option>
    </select><br><br>

    <label>Task Date:</label><br>
    <input type="date" name="task_date" value="<?= old('task_date') ?>"><br><br>

    <button type="submit">Save Task</button>

</form>

</body>
</html>
