<?php

require_once "connect.php";

$prodID = $_GET['id'];

$sql = "DELETE FROM prod WHERE id= $prodID";

$res  = $conn->query($sql);
if($res)
    header('Location: index.php');
else    
    echo "error happened";