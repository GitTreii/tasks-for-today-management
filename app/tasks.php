<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<nav>
    <a href="/">Today</a> |
    <a href="/tasks">All Tasks</a> |
    <a href="/profile">Profile</a> |
    <a href="/about">About</a>
</nav>

<h1>All Tasks</h1>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>