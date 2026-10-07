<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>Edit Task</h1>

<?php if (session()->getFlashdata('errors')): ?>
    <ul>
        <?php foreach (session()->getFlashdata('errors') as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<form action="/tasks/update/<?= $task['id'] ?>" method="post">

    <label>Title:</label><br>
    <input type="text" name="title" value="<?= old('title', $task['title']) ?>"><br><br>

    <label>Status:</label><br>
    <select name="status">
        <option value="pending" <?= old('status', $task['status']) === 'pending' ? 'selected' : '' ?>>Pending</option>
        <option value="completed" <?= old('status', $task['status']) === 'completed' ? 'selected' : '' ?>>Completed</option>
    </select><br><br>

    <label>Task Date:</label><br>
    <input type="date" name="task_date" value="<?= old('task_date', $task['task_date']) ?>"><br><br>

    <button type="submit">Update Task</button>

</form>

</body>
</html>
