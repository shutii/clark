<?php

        require_once "connect.php";

        $categoryName = $_POST['categoryName'];
        $catStatus = $_POST['status'];

        // $sql = "INSERT INTO imtbl (Name, Status) values ('$catName', '$catStatus')";
        $sql = "INSERT INTO cat (categoryName, status) values ('$categoryName', $catStatus)";
    
        $res  = $conn->query($sql);
        if($res)
        {
            echo "SUCCESSFULLY UPDATED!";   
            header('Location: form.html');
        }
        else    
            echo "error happened";
?>