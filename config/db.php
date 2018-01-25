<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=clickbank_dev',
    'username' => 'root',
    'password' => 'hot/leo/1244/06',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];

// PROD
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=particles.co.ke;dbname=particle_clickbank',
    'username' => 'particle_clicks',
    'password' => '8&!AUX6l?sH&',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    'enableSchemaCache' => true,
    'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',
];
