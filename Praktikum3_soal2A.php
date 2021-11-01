<?php

use Mobil as GlobalMobil;

class Kendaraan{
    protected $jmlRoda, $warna;

    public function setJmlRoda($jmlRoda){
        $this->JmlRoda = $jmlRoda; 
    }

    public function getJmlRoda(){
        return $this->JmlRoda;
    }

    public function setWarna($warna){
        $this->warna = $warna;
    }

    public function getWarna(){
        return $this->warna;
    }
}

class Mobil extends Kendaraan {
    protected $bahanBakar, $kapasitasMesin;

    public function setBahanBakar($bahanBakar){
        $this->bahanBakar = $bahanBakar;
    }

    public function getBahanBakar(){
        return $this->bahanBakar;
    }

    public function setKapasitasMesin($kapasitasMesin){
        $this->kapasitasMesin = $kapasitasMesin;
    } 

    public function getKapasitasMesin(){
        return $this->kapasitasMesin;
    }
}

class Sepeda extends Kendaraan {
    protected $jmlSedel, $jmlGir;

    public function setJmlSedel($jmlSedel){
        $this->jmlSedel = $jmlSedel;
    }

    public function getJmlSedel(){
        return $this->jmlSedel;
    }

    public function setJmlGir($jmlGir){
        $this->jmlGir = $jmlGir;
    }

    public function getJmlGir(){
        return $this->jmlGir;
    }
}

class Truk extends Mobil{
    protected $muatanMaks;

    public function setMuatanMaks($muatanMaks){
        $this->muatanMaks = $muatanMaks;
    }

    public function getMuatanMaks(){
        return $this->muatanMaks;
    }
}

class Taksi extends Mobil{
    protected $tarifAwal, $tarifPerKm;

    public function setTarifAwal($tarifAwal){
        $this->tarifAwal = $tarifAwal;
    }

    public function getTarifAwal(){
        return $this->tarifAwal;
    }

    public function setTarifPerKm($tarifPerKm){
        $this->tarifPerKm = $tarifPerKm;
    }

    public function getTarifPerKm(){
        return $this->tarifPerKm;
    }
}