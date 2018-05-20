<?php
/**
 * Created by PhpStorm.
 * User: venti
 * Date: 20.05.2018
 * Time: 18:12
 */

namespace Fias\Service;


class FiasImporter
{
    public function importFias()
    {
        var_dump('it work from service!');
        die();
    }

    /**
     * Преобразование xml в csv
     *
     * @param $xslt
     * @param $file
     * @return bool|string
     */
    protected function getTransformedXml($xslt, $file)
    {
        $xmlDoc = new \DOMDocument();
        $xmlDoc->load($file);

        $xslDoc = new \DOMDocument();
        $xslDoc->loadXML($xslt);

        $xsl = new \XSLTProcessor();
        $xsl->registerPHPFunctions();
        $xsl->importStylesheet($xslDoc);
        $transFormedXml = $xsl->transformToXml($xmlDoc);

        $tmpFileName = tempnam($this->getTmpDir(self::CSV_DIR), 'msp');

        file_put_contents($tmpFileName, $transFormedXml);

        chmod($tmpFileName, 0777);

        return $tmpFileName;
    }
}