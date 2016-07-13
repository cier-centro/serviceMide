<?php
require_once('Librarys/PHPExcel/Classes/PHPExcel/IOFactory.php');

class Reader {
    
    /**
     * @var PHPExcel 
     */
    private $objPHPExcel;
    private $lastSongRow = 1;
    private $lastPhraseRow = 1;
    private $lastSongSelection;
    private $lastWordRow = 1;
    
    public function getPHPExcelObject() {
        return $this->objPHPExcel;
    }
    
    public function read($path, $fileName) {
        $this->objPHPExcel = PHPExcel_IOFactory::load($path.$fileName);
    }
    
    public function getSheetObject() {
        return $this->objPHPExcel->getActiveSheet();
    }
    
}
