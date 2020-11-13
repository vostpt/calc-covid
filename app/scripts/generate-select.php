<?php

$file = fopen('../data/COVID19PT_RISK_MAPS_DADOS_DICO_POP.csv', 'r');

$concelhos = array();
while (($line = fgetcsv($file)) !== FALSE) {
    $concelhos[] = $line;
}
fclose($file);


foreach($concelhos as $c){
    $min = ceil((240 * $c[4]) / 100000);
    echo "<option data-min='{$min}' value='{$c[4]}' <?php if(\$concelho === '{$c[2]}'): ?> selected <?php endif; ?>>{$c[2]}</option>" . PHP_EOL;
}