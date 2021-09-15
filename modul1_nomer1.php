<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>
    
<h4>Nama : Dewi Nur Arifah</h4>
<h4>NIM : 20051397079</h4>
<h4>kelas : 2020A</h4>

<h2>1. Menentukan Bilangan</h2>
<h4> A. Positif Genap </h4> <h4> B. Negatif Genap </h4>
<h4> C. Positif Ganjil </h4> <h4> D. Negatif Ganjil </h4>
<form method="post" action="">
    <input type="text" name="bilangan" placeholder="Masukkan Bilangan"> <input type="submit" name="submit" value="ENTER">
</form>
<br>
<?php
if(isset($_POST['submit']))
    {
        $bilangan = $_POST['bilangan'];
            if($bilangan > 0){
                echo $bilangan . " Merupakan Bilangan Positif ";
            } elseif ($bilangan < 0){
                echo $bilangan . " Merupakan Bilangan Negatif "; 
            }

            if ($bilangan % 2 == 0){
			    echo "dan Bilangan Genap"; //Kondisi true
		    }else {
			    echo "dan Bilangan Ganjil";
		    }
    }

    ?>

</body>
</html>