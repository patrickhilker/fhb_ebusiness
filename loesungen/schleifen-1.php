<?php

for($i = 1; $i <= 100; $i++) {

    echo $i;
    if($i % 10 == 0) {
        echo '<br>';
    } else {
        echo ' - ';
    }
}