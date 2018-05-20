<?php
/**
 * Created by PhpStorm.
 * User: venti
 * Date: 20.05.2018
 * Time: 17:44
 */

namespace Fias\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FiasController  extends AbstractActionController
{

    /**
     * @var \Fias\Service\FiasImporter
     */
    protected $fiasImporter;

    public function __construct($fiasImporter)
    {
        $this->fiasImporter = $fiasImporter;
    }

    public function importFiasAction()
    {
        $this->fiasImporter->importFias();
    }
}