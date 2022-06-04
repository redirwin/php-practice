<?php

$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

$riel_usd = 0.00025;
$kyat_usd = 0.00054;
$krones_usd = 0.11;
$lek_usd = 0.0089;

$exhange_charge = 1;

echo "riel: $riel \n";
echo "kyat: $kyat \n";
echo "krones: $krones \n";
echo "lek: $lek \n";
echo "\n";
echo "${riel} riel exchanges to $" . round($riel * $riel_usd, 2) . " USD.\n";
echo "${kyat} kyat exchanges to $" . round($kyat * $kyat_usd, 2) . " USD.\n";
echo "${kyat} kyat exchanges to $" . round($kyat * $kyat_usd, 2) . " USD.\n";
echo "${lek} lek exchanges to $" . round($lek * $lek_usd, 2) . " USD.\n";

echo round($riel * $riel_usd + $kyat * $kyat_usd + $kyat * $kyat_usd + $lek * $lek_usd + $exhange_charge, 2) . " dollars left after converting.";
