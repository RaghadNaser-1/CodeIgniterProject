<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?php echo $employee->id; ?></td>
                <td><?php echo $employee->name; ?></td>
                <td><?php echo $employee->phone; ?></td>
                <td><?php echo $employee->address; ?></td>
                <td>
                    <a href="<?php echo base_url('employees/edit/'.$employee->id); ?>">Edit</a>
                    <a href="<?php echo base_url('employees/delete/'.$employee->id); ?>">Direct Delete</a>
                    <button onclick="deleteEmployee(<?php echo $employee->id; ?>)">Delete using JS</button>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function deleteEmployee(employeeId) {
            // Delete employee using JavaScript logic here
        }
    </script>
</body>
</html>
