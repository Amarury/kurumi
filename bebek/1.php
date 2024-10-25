<?php

$bulan = 2;

switch (true) {
    case ($bulan <3):
        echo "Musim dingin";
        break;
    case ($bulan <6):
        echo "Musim semi";
        break;
    case ($bulan <9):
        echo "Musim panas";
        break;
    case ($bulan <12):
        echo "Musim gugur";
        break;
    default:
        echo "Musim tidak terdaftar";
}