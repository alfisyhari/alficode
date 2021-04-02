<?php
class bimPasien
{
    public $nama_lengkap;
    public $berat_badan;
    public $tinggi_badan;
    public $umur;
    public $jenis_kelamin;
    public $resultBMI;
    public $statusBMI;

    public function __construct($nama_lengkap, $berat_badan, $tinggi_badan, $umur, $jenis_kelamin)
    {
    $this->nama_lengkap = $nama_lengkap;
    $this->umur = $umur;
    $this->jenis_kelamin = $jenis_kelamin;
    $this->berat_badan = $berat_badan;
    $this->tinggi_badan = $tinggi_badan;
    }
    public function hasilBMI()
    {
    $this->tinggi_badan = $this->tinggi_badan / 100;
    $this->resultBMI = $this->berat_badan / $this->tinggi_badan * $this->tinggi_badan;
    return $this->resultBMI;
    }
    public function statusBMI()
    {
    if ($this->resultBMI < 18.5) {
    return $this->statusBMI = "Kekurangan Berat Badan";
    } elseif ($this->resultBMI >= 18.5 && $this->resultBMI <= 24.9) {
    return $this->statusBMI = "Berat Badan Normal";
    } elseif ($this->resultBMI >= 25.0 && $this->resultBMI <= 29.9) {
    return $this->statusBMI = "Berat badan berlebih";
    } else {
    return $this->statusBMI = "Kegemukan";
    }
    }
}