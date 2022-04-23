<?php
class BMI {
    public $berat;
    public $tinggi;

    public function __construct($berat, $tinggi)
    {
        $this->berat = $berat;
        $this->tinggi = $tinggi;
    }

    public function nilaiBMI() {   
        $tggi = $this->tinggi / 100;
        $this->bm = $bmi = $this->berat / ($tggi * $tggi);
        return round($bmi, 1);
    } 


    public function statusBMI() {
        if ($this->bm < 18.5) {
            return "Kekurangan Berat Badan";
        } else if ($this->bm >= 18.5 && $this->bm <= 24.9) {
            return "Normal (Ideal)";
        } else if ($this->bm >= 25.0 && $this->bm <= 29.9) {
            return "Kelebihan berat badan";
        } else if ($this->bm >= 30.0) {
            return "Kegemukan (Obesitas)";
        }
    }
}