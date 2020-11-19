<?php
 $riel_currency_in_cambodia = 2103942;
 $kyat_currency_in_myanmar = 19092;
 $krones_currency_in_norway = 109;
 $lek_currency_in_albania = 9094; 


echo "We have $riel_currency_in_cambodia in riel";
echo "\nWe have $kyat_currency_in_myanmar kyat currency";
echo "\nWe have $krones_currency_in_norway krones currency";
echo "\nWe have $lek_currency_in_albania lek currency";

$riel = 0.00025;
$kyat = 0.00076;
$krones = 0.12;
$lek = 0.0096;

$riel_in_dollars = $riel_currency_in_cambodia * $riel;
echo "\nOur riel currency in dollars equals to $riel_in_dollars .";

$kyat_in_dollars = $kyat_currency_in_myanmar * $kyat;
echo "\nOur kyat currency would equal $kyat_in_dollars .";

$krones_in_dollars = $krones_currency_in_norway * $krones;
echo "\nOur Krones currency will equal $krones_in_dollars in dollars.";

$lek_in_dollars = $lek_currency_in_albania * $lek;
echo "\nWe will be having $lek_in_dollars in dollars.";

$final_amount = $riel_in_dollars + $kyat_in_dollars + $krones_in_dollars + $lek_in_dollars - 4;
echo "\nAfter deducting the transaction fees, we'll be receiving $final_amount dollars.";




