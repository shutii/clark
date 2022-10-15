<?php
    require_once "connect.php";
?>

<link rel="stylesheet" href="style.css">

 <table class="kini">
  
    <tr>
        <th>id</th>
        <th>Category Name</th>
        <th>Status</th>
        <th>Product Name</th>
        <th>price</th>
        <th>Actions </th>
    </tr>


    <?php
        $sqlQuery = "SELECT prod.id AS id , cat.categoryName AS categoryName, prod.Pname AS Pname, prod.price AS price, cat.status AS status FROM prod INNER JOIN cat ON prod.category = cat.id";
        $res = $conn->query($sqlQuery);
        while($row=mysqli_fetch_object($res)){
            ?>
                <tr class="active-row">
                    <td><?php echo $row->id?></td>
                    <td><?php echo $row->categoryName?></td>
                    <td><?php echo $row->status?></td>
                    td><?php echo $row->Pname?></td>
                    <td><?php echo $row->price?></td>
                    <td>
                            <a class="link" href="updateCategory.php?id=<?php echo $row->id?>">Update</a>
                            | 
                            <a class="link" href="deleteCategory.php?id=<?php echo $row->id?>">Delete</a>
                        </td> 
                </tr>
        <?php
            }   
        ?>
</table>

 