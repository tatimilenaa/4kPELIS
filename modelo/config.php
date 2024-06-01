<?php
Builder;
use Illuminate\Database\Capsule\Manager as Capsule;
use Psr\Container\ContainerInterface;

return function () {
    $builder = new ContainerBuilder();
    
    $builder->addDefinitions([
        Capsule::class => function (ContainerInterface $c) {
            $capsule = new Capsule;
            $capsule->addConnection([
                'driver'    => 'mysql',
                'host'      => 'localhost',
                'database'  => 'pelishd',
                'username'  => 'root',
                'password'  => '',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]);
            $capsule->setAsGlobal();
            $capsule->bootEloquent();

            return $capsule;
        },
        
    ]);

    return $builder->build();
};

?>