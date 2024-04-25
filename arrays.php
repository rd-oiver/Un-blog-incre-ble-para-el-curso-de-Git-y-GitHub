<?php

$colors = ["primary", "secondary", "success", "danger", "warning", "info", "dark"];

$names = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

for ($i=0; $i < count($names); $i++) { 
    echo '<button type="button" class="btn btn-'.$colors[$i].' mb-2"  data-bs-toggle="modal" data-bs-target="#childModal">'.$names[$i].'</button>';
}


