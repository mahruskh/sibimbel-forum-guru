<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use PHPExcel;
use PHPExcel_IOFactory;

class ExcelGenerator extends PHPExcel
{
    public function __construct()
    {
        parent::__construct();
    }
    public function generate()
    {
        $kolom = $this->setActiveSheetIndex(0);
        $kolom->setCellValue('A1','Nama Siswa');

        $create = PHPExcel_IOFactory::createWriter($this, "Excel2007");
        $create->save('php://output');
        
    }

}