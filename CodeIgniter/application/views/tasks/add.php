<!DOCTYPE html>
<html>
<head>
    <title>Add New Task</title>
</head>
<body>
    <h1>Add New Task</h1>

    <form method="POST" action="<?php echo base_url('tasks/add/'.$employeeId); ?>">
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Date:</label>
        <input type="date" name="date" required><br>

        <label>Description:</label>
        <textarea name="description" required></textarea><br>

        <input type="submit" value="Add Task">
    </form>
</body>
</html>
