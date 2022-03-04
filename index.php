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
           use Illuminate\Database\Capsule\Manager as capsule;
           $capsule = new capsule();
         $information=  $capsule->addConnection([
'driver'   => _driver_,
'host'     => _host_,
'database' => _database_,
'username' => _username_,
'password' => _password_,
]);
           $capsule->setAsGlobal(); 
           $capsule->bootEloquent();
           $index = (isset($_GET["index"]) && is_numeric($_GET["index"]) && $_GET["index"] > 0) ? (int)$_GET["index"] : 0;
           $allRecord = capsule::table('items')->skip($index)->take(_pageSize_)->get();
           $NextIndex =$index+_pageSize_;
           $_nextPage_ = "http://localhost:8088/Php_lab4/index.php?index= $NextIndex";
           $prevIndex = (($index - _pageSize_ )>= 0)? $index - _pageSize_ : 0;
           $_previousPage_ = "http://localhost:8088/Php_lab4/index.php?index= $prevIndex";
         require_once 'View/items.php';
        ?>
        
    </body>
</html>
