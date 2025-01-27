<?php
        $emp1 = $_POST["emp1"];
        $emp2 = $_POST["emp2"];
        $emp3 = $_POST["emp3"];
        $sueldo1 = $emp1 * 1.13;
        $sueldo2 = $emp1 * 1.26;
        $sueldo3 = $emp1 * 1.39;
        echo El nuevo sueldo del primer empleado es de $sueldo1;
        echo El nuevo sueldo del segundo empleado es de $sueldo2;
        echo El nuevo sueldo del tercer empleado es de $sueldo3
        ?>