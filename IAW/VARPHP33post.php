<?php
        $cat1 = $_POST["cat1"];
        $cat2 = $_POST["cat2"];

        $cateto1 = $cat1 * $cat1;
        $cateto2 = $cat2 * $cat2;
        $suma = $cateto1 + $cateto2;

        echo"El resultado de la hipotenusa es:";
        echo sqrt ($suma);
        ?>