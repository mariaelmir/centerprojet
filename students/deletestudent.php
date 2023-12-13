<?php
include_once("connection/connect.php");
$id=$_GET["id"];
$delete_query="delete from students where id=".$id;
$result=mysqli_query($connexion,$delete_query);

if ($result){
    echo "data inserted successfully";
    header('location:index.php?page=students');
}
?>