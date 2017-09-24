<?php

define('STEUERSATZ', 0.19); // steuersatz als in dezimalschreibweise

function addiere_mwst($netto) {

    return round($netto * (1+STEUERSATZ), 2);
}

echo '10,00 € netto = '. number_format(addiere_mwst(10), 2, ',', '.').' €<br>';
echo '15,00 € netto = '. number_format(addiere_mwst(15), 2, ',', '.').' €<br>';
echo '212,50 € netto = '.number_format(addiere_mwst(212.5), 2, ',', '.').' €';