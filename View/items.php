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
     foreach ($records as $key=>$value){
         echo "<td>".$key."</td>";
     }
     echo "</tr>"; 
    }
    echo"<tr>";
    foreach ($records as $value){
        echo "<td> $value </td>";
    }
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