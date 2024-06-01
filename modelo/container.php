<?php
require_once __DIR__ . '/../vendor/autoload.php';

use DI\ContainerBuilder;

$builder = new ContainerBuilder();

$builder->addDefinitions([
    // Define tus dependencias aquí
]);

return $builder->build();

?>