<?php
$validacion = true;

foreach ($_POST as $rgb => $valor) {
    
    // comprueba si el campo está vacio, muestra el error e inicializa el Flag
    if ($valor == null) {

        echo "<div style='background-color: red;text-align: center; color: black;';>
                <h2>Rellena el campo $rgb <br><h2>
              </div>";

        $validacion = false;
    }
    // comprueba si el campo en numerico, muestra el error e inicializa el Flag  
    elseif (!is_numeric($valor)) {
     
        echo "<div style='background-color: red;text-align: center; color: black;';>
                  <h2>$valor no es un numero<br><h2>
             </div>";

        $validacion = false;
    }
     // comprueba si el campo es de 0 a 255, muestra el error e inicializa el Flag  
    elseif ($valor >255) {

        echo "<div style='background-color: red;text-align: center; color: black;';>
                 <h2>El valor de $rgb debe ser de 0 a 255<br><h2>
                </div>";

        $validacion = false;
    }
    
}

if ($validacion == true) {

    $r = ($_POST['R']);
    $g = ($_POST['G']);
    $b = ($_POST['B']);

    // convierte a hexadecimal
    $color = sprintf("#%02x%02x%02x", $r, $g, $b);
         echo "<div style='text-align: center; color: black;';>
                 <h2>Tu color en Hexadecimal es <br>$color<h2>
              </div>";
        echo "<div style='background-color: $color; 
                          text-align: center; 
                          color: white;';>
              <br>
              </div>";
    

}else {
    // si el flag es False muestra el error
    echo "<div style='background-color: red;text-align: center; color: black;';>
    <h2>Por favor, vuelve atras y rellena todos los campos correctamente<br><h2>
   </div>";

}


?>



