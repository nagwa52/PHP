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
        $capsule->addConnection([
//'driver'   => "_driver_",
//'host'     => '_host_',
//'database' => 'database',
//'username' => 'root',
//'password' => 'password'
            'driver' => _driver_,
            'host' => _host_,
            'database' => _database_,
            'username' => _username_,
            'password' => _password_,
        ]);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $index = (isset($_GET["index"]) && is_numeric($_GET["index"]) && $_GET["index"] > 0) ? (int) $_GET["index"] : 0;
        $allRecord = capsule::table('items')->skip($index)->take(_pageSize_)->get();
       $table= capsule::table('items');
        if ((isset($_GET["glass"]) && is_numeric($_GET["glass"]) && $_GET["glass"] > 0) ? (int) $_GET["glass"] : 0) {
            require_once 'View/details.php';
        } else {
            require_once 'View/table.php';
        }
        ?>

    </body>
</html>
