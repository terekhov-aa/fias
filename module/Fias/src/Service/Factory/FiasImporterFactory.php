<?php
/**
 * Created by PhpStorm.
 * User: venti
 * Date: 20.05.2018
 * Time: 18:13
 */

namespace Fias\Service\Factory;


use Fias\Service\FiasImporter;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class FiasImporterFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        return new FiasImporter();
    }
}