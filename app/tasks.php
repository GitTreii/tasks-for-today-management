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

<?php if (session()->get('logged_in')): ?>
    <p>
        <a href="/tasks/new">New Task</a> |
        <a href="/logout">Logout</a>
    </p>
<?php else: ?>
    <p>
        <a href="/login">Login</a>
    </p>
<?php endif; ?>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Date</th>

        <?php if (session()->get('logged_in')): ?>
            <th>Actions</th>
        <?php endif; ?>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>

            <?php if (session()->get('logged_in')): ?>
                <td>
                    <a href="/tasks/edit/<?= $task['id'] ?>">Edit</a>

                    <form action="/tasks/delete/<?= $task['id'] ?>" method="post" style="display:inline">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            <?php endif; ?>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>