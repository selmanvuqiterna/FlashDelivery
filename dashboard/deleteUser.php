<?php 
    include '../Register/registration.php';
    $registrationDb = new registrationDb();
    $id = $_REQUEST['id'];
    $deletion = $registrationDb->deletion($id);
 
    if ($deletion) {
        echo "<script>alert('The user has been deleted successfully!');</script>";
        echo "<script>window.location.href = 'userD.php';</script>";
    }
 ?>