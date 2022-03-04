<?php

echo "<table border='1'>";
$index = 0;
foreach ($allRecord as $records) {
    if ($index === 0) {
        echo "<tr>";

        echo "<td>Name</td>";
        echo "<td>Price</td>";
        echo "<td>Category</td>";

        echo "</tr>";
    }
    echo"<tr>";
   
        echo "<td>".$records->product_name ."</td>";
        echo "<td>".$records->list_price ."</td>";
        echo "<td>".$records->category ."</td>";
    
    echo "</tr>";
    $index++;
}
?>

