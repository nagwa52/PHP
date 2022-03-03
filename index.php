<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           session_start();
           require_once('vendor/autoload.php');
           
           if(!isset($_SESSION['visited'])){
               $_SESSION['visited'] = true;
               counter::addVisit();           
           }
           $counter = counter::getCounter();
           echo '<h2> counted unique visitor is '. $counter.'</h2>';
        ?>
    </body>
</html>
