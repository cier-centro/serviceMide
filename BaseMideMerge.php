<?php

class BaseMideMerge {
    
    /**
     * @type Reader
     * @type Level
     * @type Word 
     */
    
    protected $reader;
    protected $baseMide;
    
    
    public function setReader($reader) {
        $this->reader = $reader;
    }
    
    public function setBaseMide($baseMide) {
        $this->baseMide = $baseMide;
    }
    
    public function getArrayAllUniversitiesToBuildJson() {
        $universitiesArray = $this->baseMide->getArrayAllUniversities();
        $dataArray = array();

        foreach ($universitiesArray as $i => $universities) {
            $dataArray[$i]['productMide'] = $universities['productMide'];
            $dataArray[$i]['codeIes'] = $universities['codeIes'];
            $dataArray[$i]['nameUniversity'] = $universities['nameUniversity'];
            $dataArray[$i]['sector'] = $universities['sector'];
            $dataArray[$i]['typeUniversity'] = $universities['typeUniversity'];
            $dataArray[$i]['isAccredited'] = $universities['isAccredited'];
            $dataArray[$i]['position'] = $universities['position'];
        }
        
        return $dataArray;
    }
    
}
