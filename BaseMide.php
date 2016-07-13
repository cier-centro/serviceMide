<?php

require_once 'Reader.php';

class BaseMide {

    protected $reader;

    public function setReader($reader) {
        $this->reader = $reader;
    }

    public function getArrayAllUniversitiesByCodeIes($codeIes) {
        $sheet = $this->reader->getSheetObject();
        $universitiesArray = array();

        for ($file = 2; $file <= $sheet->getHighestRow(); $file++) {
            $cellCodeIesValue = $sheet->getCellByColumnAndRow(1, $file)->getValue();

            if ($codeIes == $cellCodeIesValue) {
                $universitiesArray[] = $sheet->getCellByColumnAndRow(0, $file)->getValue();
                $universitiesArray[] = $sheet->getCellByColumnAndRow(1, $file)->getValue();
                $universitiesArray[] = $sheet->getCellByColumnAndRow(2, $file)->getValue();
                $universitiesArray[] = $sheet->getCellByColumnAndRow(3, $file)->getValue();
                $universitiesArray[] = $sheet->getCellByColumnAndRow(4, $file)->getValue();
                $universitiesArray[] = $sheet->getCellByColumnAndRow(5, $file)->getValue();
            }
        }

        return $universitiesArray;
    }

    public function getArrayAllUniversities() {
        $sheet = $this->reader->getSheetObject();
        $universitiesArray = array();

        $i = 0;

        for ($file = 2; $file <= $sheet->getHighestRow(); $file++) {

            $productMide = $sheet->getCellByColumnAndRow(0, $file)->getValue();
            $codeIes = $sheet->getCellByColumnAndRow(1, $file)->getValue();
            $nameUniversity = $sheet->getCellByColumnAndRow(2, $file)->getValue();
            $sector = $sheet->getCellByColumnAndRow(3, $file)->getValue();
            $typeUniversity = $sheet->getCellByColumnAndRow(4, $file)->getValue();
            $isAccredited = $sheet->getCellByColumnAndRow(5, $file)->getValue();
            $position = $sheet->getCellByColumnAndRow(6, $file)->getValue();

            $universitiesArray[$i]['productMide'] = $productMide;
            $universitiesArray[$i]['codeIes'] = $codeIes;
            $universitiesArray[$i]['nameUniversity'] = $nameUniversity;
            $universitiesArray[$i]['sector'] = $sector;
            $universitiesArray[$i]['typeUniversity'] = $typeUniversity;
            $universitiesArray[$i]['isAccredited'] = $isAccredited;
            $universitiesArray[$i]['position'] = $position;

            $i++;
        }

        return $universitiesArray;
    }

}
