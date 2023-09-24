<?php
require_once("signupConfig.php");

$record = new SignupConfig();

if(isset($_GET['id']) && isset($_GET['req'])){
    if($_GET['req'] == "delete"){
        $record->setId($_GET['id']);
        $record->delete();
        echo "<script>alert('Data Deleted Succesfully');document.location='data.php'</script>";
    }
}

?>