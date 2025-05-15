<?php
$ikan =array ("lele","layur","bandeng","cumicumi");
$ikan[]="paus";
echo $ikan[4] . "</br>";
// menggantii nomor di echo sesuai angka array yang di inginkan..
 
//asosiasi
$KelasSepuluhB =  [
    "nama" => "Menye menye",
    "Kelas" => "duapuluhB",
    "alamat" => "jalanin aja",
    
];
echo "alamat menye menye</br>";
echo $KelasSepuluhB ["alamat"] . "</br></br>";
echo "nama lengkap </br>";
echo $KelasSepuluhB["nama"] . "</br></br>";

$bumbu_dapur = [   //snakes
    "garam",
    "gula",
    "lada",
    "ketumbar",
    "cengkeh",
    "kemiri",
] ;
echo "Daftar belanja hari ini </br>";
    foreach ($bumbu_dapur as $daftar_belanja) {
        
        echo "-" .$daftar_belanja ."</br>";
}


