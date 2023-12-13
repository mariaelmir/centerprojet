
<div class="container" style="max-width:90% !important">

<?php

$id=$_GET["id"];
include_once("connection/connect.php");
$select_query = "SELECT * FROM languages where id=".$id; 
$result = mysqli_query($connexion, $select_query);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC)

?>

<div class="row">
        <form method="post" action="./index.php?page=updatelanguage">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label  >name</label>
                <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group"> 
                <label  >price</label>
                <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>">
</div>
            
            <div class="form-group"> 
                <label  >nbofhours</label>
                <input type="number" class="form-control" name="nbofhours" value="<?php echo $row['nbofhours']; ?>">
            </div>
            <div class="form-group">
                <input type="submit" value="save" name="submit" class="btn btn-primary">     
            </div>
        </form>
    </div>
</div>

</body>



</html>