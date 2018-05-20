<?php
/**
 * Created by PhpStorm.
 * User: venti
 * Date: 20.05.2018
 * Time: 17:32
 */

namespace Fias;

class Module
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
