<?php
require_once("signupConfig.php");
$data = new signupConfig();
$id = $_GET['id'];
$data->setId($id);

if(isset($_POST['edit'])){
    $data->setfirstName($_POST['firstname']);
    $data->setlastName($_POST['lastname']);
    $data->setAddress($_POST['address']);

    echo $data->update();
    echo "<script>alert('Data Updated Succesfully');document.location='data.php'</script>";
}

$record = $data->fetchOne();
$value = $record[0];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>edit</title>
</head>
<body>
    <div class="container">
        <h2>Edit File</h2>
        <form action="" method="post">
            <label for="firstname">First Name:</label>
            <input 
                type="text" 
                id="firstname" 
                name="firstname"
                value="<?php echo $value['firstName']; ?>" 
            />
            
            <label for="lastname">Last Name:</label>
            <input 
                type="text" 
                id="lastname" 
                name="lastname" 
                value="<?php echo $value['lastName']; ?>"
            />
            
            <label for="address">Address:</label>
            <input 
                type="text" 
                id="address" 
                name="address"
                value="<?php echo $value['address']; ?>"
            />
            
           <input type="submit" value="UPDATE" name="edit" /> 
        </form>
    </div>
</body>
</html>