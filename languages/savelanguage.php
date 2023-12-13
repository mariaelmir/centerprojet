<?php
include_once("connection/connect.php");
if(isset($_POST["submit"])){

    $name=$_POST["name"];
    $price=$_POST["price"];
    $nbofhours=$_POST["nbofhours"];



    $insert_query="insert into languages(name,price,nbofhours)
    values('".$name."',".$price.",".$nbofhours.")";
    echo $insert_query ;
    $result= mysqli_query($connexion,$insert_query);

    if($result){
        echo "data inserted successfully";
        header('location:index.php?page=languages');
    }
}

?>