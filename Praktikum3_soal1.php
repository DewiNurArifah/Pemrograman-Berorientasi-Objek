<!-- Nama  : Dewi Nur Arifah -->
<!-- NIM   : 20051397079 -->
<!-- Prodi : 2020A - Manajemen Informatika -->

<?php

//Pembuatan class Tabungan
class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo
class PengambilanUang extends Tabungan{
    private $proteksi;

    //Constructor value saldo
    public function __construct($saldo)
    {
        $this->saldo=$saldo;
        $this->proteksi = 1000;
    }

    //Fungsi pengambilan nilai Saldo
    public function getSaldo(){
        return "Uang yang ditabung : " . $this->saldo . "<br> Uang yang diproteksi : " . $this->proteksi;
    } 
    //Fungsi pengambilan jumlah nilai uang yang diambil
    public function ambilUang($jumlah){
        if($jumlah == 4500){
            return "Uang yang akan diambil : " . $jumlah . " false <br> Saldo sekarang : " . $this->saldo;
        }else{
            return "Uang yang akan diambil : " . $jumlah . " true <br> Saldo sekarang : " . $this->saldo -= $jumlah;
        }       
    }
}

//Penampilan Output
$tabungan = new PengambilanUang(5000);
echo $tabungan->getSaldo();
echo "<br> ----------------------------------------- <br>";
echo $tabungan->ambilUang(4500);
echo "<br> ----------------------------------------- <br>";
echo $tabungan->ambilUang(2500);