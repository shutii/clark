<link rel="stylesheet" href="style2.css">
<?php
    require_once "connect.php";
    $catID = $_GET['id'];

    // var_dump($catID);
    $sqlQuery = "SELECT * from cat WHERE id = $catID";
    
    $res = $conn->query($sqlQuery);


    if($_POST)
    {
        $Cname = $_POST ['name'];
        $Cstat = $_POST ['status'] ;
       $queryUpdate = "UPDATE cat SET name= ' $Cname ', status= '$Cstat ' WHERE id = '$catID '";  
       $res = $conn->query($queryUpdate);
       echo "\nSuccessfully Updated!";
    }


      
?>

<form action="" method="post">

    <input type="text" placeholder="Enter Category name" name="name" value="">
    <br>
    <input type="text"  name="status" placeholder="Enter category status" value="">
    <br>
   
    <input class="btn" type="submit">
</form>