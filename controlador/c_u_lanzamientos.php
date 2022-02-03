<?php

    require_once("modelo/lanzamientos.php");
    $lanz=new lanzamientos();

    $x=$lanz->ult_lanzamiento();
    

    include "../index.php";

    