<?php

namespace Faculdade\Infra;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerCreator
{
    /**
     * @return EntityManagerInterface
     * @throws \Doctrine\ORM\ORMException
     */
    public function getEntityManager(): EntityManagerInterface
    {
        $paths = [__DIR__ . '/../Model'];
        $isDevMode = false;

        $dbParams = [
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite'
        ];

        $config = Setup::createAnnotationMetadataConfiguration(
            $paths,
            $isDevMode
        );

        return EntityManager::create($dbParams, $config);
    }
}
