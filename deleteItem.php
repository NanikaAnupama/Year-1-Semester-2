<?php
include 'connect.php';
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from item where IID=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        //echo "Deleted successfully";
        header('location:ItemManagement.php');
    }else{
        die(mysqli_error($con));
    }
}
?>