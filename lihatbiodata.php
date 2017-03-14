<?php
$json_data=file_get_contents("biodata.json");
$obj = json_decode($json_data);
echo "NIM : "; echo $obj->{'nim'};echo "<br>";
echo "Nama : "; echo $obj->{'nama'};echo "<br>";
echo "Alamat : "; echo $obj->{'alamat'};echo "<br>";
echo "No Hp : "; echo $obj->{'no_hp'};echo "<br>";
echo "Mata Kuliah Yang di Ambil : ";
echo "<br>";
echo "Mata Kuliah 1: ";echo $obj->matkul[0];
echo "<br>";
echo "Mata Kuliah 2: ";echo $obj->matkul[1];
echo "<br>";
echo "Mata Kuliah 3: ";echo $obj->matkul[2];
?>
