<!-- // Dewi Nur Arifah
// 20051397079 - MI 2020A -->

<?php
//membuat class parent pegawai
class Pegawai
{
	public $nama;
	public	function __construct($nama)
	{
		$this->nama = $nama;
	}
	public	function getNama()
	{
		return $this->nama;
	}
}

//child class dari parent pegawai yaitu Manajer
class Manajer extends Pegawai{
	public $tunjangan;
	public	function __construct($nama, $tunjangan){
		parent::__construct($nama);
		$this->tunjangan = $tunjangan;
	}
	public	function getTunjangan(){
		return $this->tunjangan;
	}
}

//child class dari parent pegawai yaitu Kurir
class Kurir extends Pegawai{
	public $gaji;

    public	function __construct($nama, $gaji){
		parent::__construct($nama);
		// $this->bonus = $bonus;
		$this->gaji = $gaji;

	}
	public	function getGaji(){
		return $this->gaji;
	}
}

// class soal1 untuk inisiasi dan tampilkan output 
class Soal1{
	public static
	function Proses($peg){
		if ($peg instanceof Manajer)
		{
			$man = $peg;
			echo "<br>Nama manajer: ".$man->nama, "\n";
			echo "<br>Tunjangan: Rp. ".($man->tunjangan), "\n" ."<br>";
		}
		else if ($peg instanceof Kurir)
		{
			$kur =  $peg;
			echo "<br>Nama kurir: ".$kur->nama, "\n";
			echo "<br>Gaji: Rp. ".($kur->gaji), "\n";
		}
	}
	public static function main(){

        echo "Soal Nomor 1" . "<br>";
		$peg1 = new Manajer("Agus", 8000000);
		Soal1::Proses($peg1);
		$peg2 = new Kurir("Supri", 3000000);
		Soal1::Proses($peg2);
	}
}
Soal1::main(array());
?>
      