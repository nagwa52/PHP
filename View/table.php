<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<table border='1'>";
        $index = 0;
        foreach ($allRecord as $records) {
            if ($index === 0) {
                echo "<tr>";
                echo "<td>Name</td>";
                echo "<td>Price</td>";
                echo "<td>Country</td>";
                echo "<td>Image</td>";
                echo "<td>Visit</td>";

                echo "</tr>";
            }
            echo"<tr>";
            $image = explode(".", $records->Photo);
            $image = $image[0] . "tz" . ".png";
            $currentUrl = $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
           $currentUrl= explode("?", $currentUrl);
            $details = $currentUrl[0] . "?glass=" . $records->id;
            echo "<td> $records->product_name </td>";
            echo "<td> $records->list_price</td>";
            echo "<td> $records->CouNtry</td>";
            echo "<td><img src='View/images/images/" . $image . "'></td>";
            echo "<td><a href='".$details."'>click to visit</a></td>";
            echo "</tr>";
            $index++;
        }

        echo "</table>";
        ?>

    </body>
</html>