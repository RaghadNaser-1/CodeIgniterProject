<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>

    <h2>Employee Information</h2>
    <!-- Display employee information here -->

    <h2>Task List</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        <?php foreach ($tasks as $task): ?>
            <tr>
                <td><?php echo $task->id; ?></td>
                <td><?php echo $task->title; ?></td>
                <td><?php echo $task->date; ?></td>
                <td><?php echo $task->description; ?></td>
                <td>
                    <a href="<?php echo base_url('tasks/update/'.$task->id); ?>">Update</a>
                    <a href="<?php echo base_url('tasks/delete/'.$task->id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="<?php echo base_url('tasks/add/'.$employee->id); ?>">Add New Task</a>
</body>
</html>
