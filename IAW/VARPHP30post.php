<?php
        $horastrab = $_POST["horastrab"];
        $horasex = $_POST["horasex"];
        $tarifa = $_POST["tarifa"];

        if ($horastrab > 40) 
        {
            $tarifaex = $tarifa * 1.50;
            $horasextotal = $horasex * $tarifaex;
            $salario = $horastrab * $tarifa;
            $salariogen = $salario + $horasextotal;
        }

        if ($horastrab < 40) 
        {
            $horastotal = $horastrab + $horasex;
            $salariomen = $horastotal * $tarifa;
        }

        echo "Si tus horas trabajadas son mas de 40, el total es de:"$salariogen €;
        echo "Si tus horas trabajadas son menos de 40, el total es de:"$salariomen €;
        ?>