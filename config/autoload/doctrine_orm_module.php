<?php
/**
 * Created by PhpStorm.
 * User: dyuelber1
 * Date: 26/12/18
 * Time: 12:25
 */

use Doctrine\DBAL\Driver\PDOMySql\Driver as PDOMySqlDriver;

return [
    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => PDOMySqlDriver::class,
                'params' => [
                    'host'     => 'localhost',
                    'user'     => 'root',
                    'password' => 'drm',
                    'dbname'   => 'blog',
                ]
            ],
        ],
    ],
];