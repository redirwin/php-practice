<?php

/* Write a program to calculate exactly how much cash in USD 
we should end up with after it has all been exchanged. */

// starting values
$riel = 2103942;
$kyat = 19092;
$krones = 109;
$lek = 9094;

// current exchange rates
$riel_usd = 0.00025;
$kyat_usd = 0.00054;
$krones_usd = 0.11;
$lek_usd = 0.0089;

$exhange_charge = 1;

echo "Starting values: \n";
echo "riel: $riel \n";
echo "kyat: $kyat \n";
echo "krones: $krones \n";
echo "lek: $lek \n";
echo "\n";

echo "${riel} riel exchanges to $" . round($riel * $riel_usd, 2) . " USD.\n";
echo "${kyat} kyat exchanges to $" . round($kyat * $kyat_usd, 2) . " USD.\n";
echo "${kyat} kyat exchanges to $" . round($kyat * $kyat_usd, 2) . " USD.\n";
echo "${lek} lek exchanges to $" . round($lek * $lek_usd, 2) . " USD.\n";

echo "\n$" . round($riel * $riel_usd + $kyat * $kyat_usd + $kyat * $kyat_usd + $lek * $lek_usd + $exhange_charge, 2) . " after converting.";
