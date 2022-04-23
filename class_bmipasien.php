<?php
require_once 'class_bmi.php';
require_once 'class_pasien.php';

class BMIPasien {
    public $bmi;
    public $tanggal;
    public $pasien;

    public function __construct($bmi, 
    $pasien, $tanggal)
    {
        $this->bmi = $bmi;
        $this->pasien = $pasien;
        $this->tanggal = $tanggal;
    }
}