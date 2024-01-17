<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;

class AppController
{
    // * Le constructeur reçoit l'instance du container de dépendances
    public function __construct(private ContainerInterface $container)
    {
    }
}
