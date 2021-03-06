<?php 
  require_once 'Praktikum3_soal2A.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel 1. Data Objek</title>
</head>
<style>
    .judul{
        background-color: #C0C0C0;
    }
</style>

<body>

<?php
$truk1 = new Truk;
$truk1->setjmlRoda(4);
$truk1->setWarna('Kuning');
$truk1->setBahanBakar('Solar');
$truk1->setKapasitasMesin(1500);
$truk1->setMuatanMaks(1000);

$truk2 = new Truk;
$truk2->setjmlRoda(6);
$truk2->setWarna('Merah');
$truk2->setBahanBakar('Solar');
$truk2->setKapasitasMesin(2000);
$truk2->setMuatanMaks(5000);

$taksi1 = new Taksi;
$taksi1->setjmlRoda(4);
$taksi1->setWarna('Oranye');
$taksi1->setBahanBakar('Bensin');
$taksi1->setKapasitasMesin(1500);
$taksi1->setTarifAwal(10000);
$taksi1->setTarifPerKm(5000);

$taksi2 = new Taksi;
$taksi2->setjmlRoda(4);
$taksi2->setWarna('Biru');
$taksi2->setBahanBakar('Bensin');
$taksi2->setKapasitasMesin(1300);
$taksi2->setTarifAwal(7000);
$taksi2->setTarifPerKm(3500);

$sepeda1 = new Sepeda;
$sepeda1->setjmlRoda(3);
$sepeda1->setWarna('Hitam');
$sepeda1->setJmlSedel(1);
$sepeda1->setJmlGir(2);

$sepeda2 = new Sepeda;
$sepeda2->setjmlRoda(2);
$sepeda2->setWarna('Putih');
$sepeda2->setJmlSedel(2);
$sepeda2->setJmlGir(5);

?>

<center>
<table>
        <tr div class="judul">
            <td>No</td>
            <td>Object</td>
            <td>Jumlah Roda</td>
            <td>Warna</td>
            <td>Bahan Bakar</td>
            <td>Kapasitas Mesin</td>
            <td>Muatan Maksimal</td>
            <td>Tarif Awal</td>
            <td>Tarif Per KM</td>
            <td>Jumlah Sadel</td>
            <td>Jumlah Gir</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Truk 1</td>
            <td><?= $truk1->getjmlRoda(); ?></td>
            <td><?= $truk1->getWarna(); ?></td>
            <td><?= $truk1->getBahanBakar(); ?></td>
            <td><?= $truk1->getKapasitasMesin(); ?></td>
            <td><?= $truk1->getMuatanMaks(); ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Truk 2</td>
            <td><?= $truk2->getjmlRoda(); ?></td>
            <td><?= $truk2->getWarna(); ?></td>
            <td><?= $truk2->getBahanBakar(); ?></td>
            <td><?= $truk2->getKapasitasMesin(); ?></td>
            <td><?= $truk2->getMuatanMaks(); ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Taksi 1</td>
            <td><?= $taksi1->getjmlRoda(); ?></td>
            <td><?= $taksi1->getWarna(); ?></td>
            <td><?= $taksi1->getBahanBakar(); ?></td>
            <td><?= $taksi1->getKapasitasMesin(); ?></td>
            <td>-</td>
            <td><?= $taksi1->getTarifAwal(); ?></td>
            <td><?= $taksi1->getTarifPerKm(); ?></td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Taksi 2</td>
            <td><?= $taksi2->getjmlRoda(); ?></td>
            <td><?= $taksi2->getWarna(); ?></td>
            <td><?= $taksi2->getBahanBakar(); ?></td>
            <td><?= $taksi2->getKapasitasMesin(); ?></td>
            <td>-</td>
            <td><?= $taksi2->getTarifAwal(); ?></td>
            <td><?= $taksi2->getTarifPerKm(); ?></td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>5</td>
            <td>Sepeda 1</td>
            <td><?= $sepeda1->getjmlRoda(); ?></td>
            <td><?= $sepeda1->getWarna(); ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><?= $sepeda1->getJmlSedel(); ?></td>
            <td><?= $sepeda1->getJmlGir(); ?></td>
        </tr>
        <tr>
            <td>6</td>
            <td>Sepeda 2</td>
            <td><?= $sepeda2->getjmlRoda(); ?></td>
            <td><?= $sepeda2->getWarna(); ?></td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td><?= $sepeda2->getJmlSedel(); ?></td>
            <td><?= $sepeda2->getJmlGir(); ?></td>
        </tr>
    </table>
    </center>
</body>
</html>