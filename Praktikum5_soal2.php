<!-- // Dewi Nur Arifah
// 20051397079 - MI 2020A -->

<?php
// Membuat parent class pegawai
class Pegawai
{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji){
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
}

//membuat child class pegawai yaitu manajer 
class Manajer extends Pegawai{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan){
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
	public	function infoTunjangan(){
		return $this->tunjangan;
	}
}

//membuat child class pegawai yaitu Programmer
class Programmer extends Pegawai{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus){
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji(){
		return $this->gaji;
	}
	public	function infoBonus(){
		return $this->bonus;
	}
}

//untuk inisiasi dan tampilkan output
class Bayaran{
	public function hitungBayaran($peg){
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args){
        echo "Soal Nomor 2". "<br>";
		$man = new Manajer("Agus", 8000000, 1000000);
		$prog = new Programmer("Wintar", 6000000, 500000);
		$hr = new Bayaran();
		echo "<br> Gaji untuk Manajer Bernama ". $man->nama." : Rp. ".($hr->hitungBayaran($man)), "\n" . "<br>";
		echo "<br>Gaji untuk Programmer Bernama ".$prog->nama. " : Rp. ".($hr->hitungBayaran($prog)), "\n";
	}
}
Bayaran::main(array());
        ?>
      