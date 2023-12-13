<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){
$id=$_POST["id"];
$name= $_POST["name"];
$price= $_POST["price"];
$nbofhours= $_POST["nbofhours"];




$insert_query="update languages set name='".$name."',price=".$price.",nbofhours=".$nbofhours." where id=".$id ;
 $result = mysqli_query($connexion, $insert_query);

 




 if($result){
    echo "data inserted successfully";
    header('location:index.php?page=languages');

 }else{
   echo $insert_query."<br>";
echo mysqli_error($connexion);

 }

// echo $insert_query;

}




?>