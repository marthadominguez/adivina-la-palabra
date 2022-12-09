<?php
print_r($_REQUEST);

$words = array("girasol", "aguacate", "gato", "diamante");

foreach ($_REQUEST as $key => $word) {
    $_REQUEST[$key] = strtolower($_REQUEST[$key]);
    if (in_array($_REQUEST[$key], $words)) {
        echo "LA PALABRA INGRESADA ES CORRECTA";
    } else {
        echo "La palabra ingresada es incorrecta";
    }
};
