<?php


require_once __DIR__ . '/../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model;


class Conexion {
    public function conectar() {
        define('HOST', 'localhost');
        define('NAME', 'pelishd'); 
        define('USER', 'root'); 
        define('PASS', ''); 

        try {
            $capsule = new Capsule;
            $capsule->addConnection([
                'driver'        => 'mysql',
                'host'          => HOST,
                'database'      => NAME,
                'username'      => USER,
                'password'      => PASS,
                'charset'       => 'utf8',
                'collation'     => 'utf8_unicode_ci',
                'prefix'        => '',
            ]);
            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;

        } catch (Exception $e) {
            echo "Error de conexión: " . $e->getMessage();
            return null;
        }
    }
}


?>