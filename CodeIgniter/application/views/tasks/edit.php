<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>
    <h1>Edit Task</h1>

    <h2>Task Information</h2>
    <!-- Display task information here -->

    <form method="POST" action="<?php echo base_url('tasks/update/'.$task->id); ?>">
        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $task->title; ?>" required><br>

        <label>Date:</label>
        <input type="date" name="date" value="<?php echo $task->date; ?>" required><br>

        <label>Description:</label>
        <textarea name="description" required><?php echo $task->description; ?></textarea><br>

        <input type="submit" value="Update Task">
    </form>

    <a href="<?php echo base_url('tasks/delete/'.$task->id); ?>">Delete Task</a>
</body>
</html>
