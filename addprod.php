<link rel="stylesheet" href="style2.css">
<form action="dawatprod.php" method="post">
<?php
    require_once "connect.php";
    // var_dump($catID);
    $sql = "SELECT id, categoryName FROM cat";
    $res = $conn->query($sql);
    
?>

<label for="category">Choose a category:</label>

    <select class="combo" name="category">
    <?php
        while($rows = $res->fetch_assoc())
        {
            $catID = $rows['id'];
            $catName = $rows['categoryName'];
            echo "<option value = $catID>$catName</option>";
        }
    ?>
<br>
<input type="text" placeholder="Enter product name" name="Pname">
    <br>
    <input type="text" placeholder="Enter price" name="price">
    <br>
    <input class="btn" type="submit" value="submit">
</form>