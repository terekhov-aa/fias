<?php
/**
 * Created by PhpStorm.
 * User: venti
 * Date: 20.05.2018
 * Time: 18:11
 */

namespace Fias\Controller\Factory;


use Fias\Controller\FiasController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Fias\Service\FiasImporter;

class FiasControllerFactoy implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $fiasImporter = $container->get(FiasImporter::class);
//        $fiasImporter = new \Fias\Service\FiasImporter();
        return new FiasController($fiasImporter);
    }
}