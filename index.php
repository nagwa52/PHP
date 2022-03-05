<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
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
        $capsule->addConnection([
//            'driver' => __DRIVER__,
//            'host' => __HOST__,
//            'database' => __DATABASE__,
//            'username' => __USERNAME__,
//            'password' => __PASSWORD__
             'driver' => "mysql",
           'host' => "127.0.0.1",
           'database' => "student",
           'username' => "root",
            'password' => "",
            
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        //(isset($_POST["index"])) ? echo 'welcome' : echo 'not registered';
         
           $record =  capsule::table('data')->get();
          require_once './View/memberArea.php';
        //  require_once './View/Login.php';
        ?>
    </body>
</html>
