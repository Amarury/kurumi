<?php

$kode_kendaraan = "B";

switch ($kode_kendaraan) {
    case ("M"):
        echo"Mobil";
        break;
    case ("S"):
        echo "Sepeda motor";
        break;
    case ("B"):
        echo "Bus";
        break;
    case ("T"):
        echo "Truk";
        break;
    default:
    echo "Kode tidak terdaftar";
}