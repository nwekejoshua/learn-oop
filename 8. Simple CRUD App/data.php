<?php
require_once("signupConfig.php");
$data = new signupConfig();
$all = $data->fetchAll();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>List Of All Records</h1>

        <div id="add">
            <a href="signup.php">Add New</a>
        </div>

    <!-- Table to hold data -->
    <table border="1">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <?php
        foreach($all as $key => $value){
        ?> 
        <tbody>   
            <tr>
                <td><?= $value['firstName'] ?></td>
                <td><?= $value['lastName'] ?></td>
                <td><?= $value['address'] ?></td>
                <td>
                    <a class="edit" href="edit.php?id=<?= $value['id'] ?> &req=edit">Edit</a>
                    <a class="delete" href="delete.php?id=<?= $value['id'] ?> &req=delete">Delete</a>
                </td>
            </tr>

            <!-- <tr>
                <td>John</td>
                <td>Doe</td>
                <td>123 Main St</td>
                <td>
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr> -->
        </tbody>
        <?php
        }
        ?>
    </table>
</body>
</html>