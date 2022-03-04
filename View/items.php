<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
echo "<table border='1'>";
$index =0;
foreach ($allRecord as $records){
    if($index===0){
     echo "<tr>"; 
   
         echo "<td>Item Id</td>";
          echo "<td>Name</td>";
    
     echo "</tr>"; 
    }
    echo"<tr>";
   
        echo "<td> $records->id </td>";
        echo "<td> $records->product_name</td>";
   
    echo "</tr>";
    $index ++;
}
echo "</table>";
?>
<div>
    <a  href= <?php echo $_previousPage_;?>> >>Previous</a> | <a href=<?php echo $_nextPage_;?>>Next >></a>
</div>
          </body>
</html>