<?php
class Pasien {
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;
    public $gender;

    public function __construct($kode, $nama)
    {
        $this->kode = $kode;
        $this->nama = $nama;
    }
}