<?php

namespace Carlos\Contatos\Helper;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @return EntityManagerInterface
 * @throws \Doctrine\ORM\ORMException
 */

class EntityManagerFactory {

    public function getEntityManager(): EntityManagerInterface 
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir . '/src'], true);
        $connection =  [
                        'driver' => 'pdo_mysql',
                        'host' => 'localhost',
                        'dbname' =>'contato',
                        'user' => 'root',
                        'password' => 'Xonoverse1'

                    ];
        return EntityManager::create($connection, $config);
    }

}