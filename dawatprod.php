<?php
    require_once "connect.php";
    
    $cat = $_POST['category'];
    $prodName = $_POST['Pname'];
    $price = $_POST['price'];

    $sql = "INSERT INTO prod (Pname,category,price) values ('$prodName', '$cat','$price')";

    $res  = $conn->query($sql);
    if($res)
        header('Location: addprod.php');
    else    
        echo "error happened";

?>