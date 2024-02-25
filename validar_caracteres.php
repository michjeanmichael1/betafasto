<?php
if (isset ($_POST ['submit'])) {
    if(is_numeric($nombre)) {
        echo <p class ='error'> Debe ser letras  </p;
    }else{
        if (strlen($nombre)<40){
            echo<p class ='error'>El nombre es muy largo</p
        }
    }
    
    if(empty($cedula)) {
        echo <p class ='error'> *agrega tu nombre  </p;
    }else{
        if (!is_numeric($cedula)){
            echo"<p class ='error'> *La casilla cedula debe contener un numero </p"
        }
    }

    if(empty($municipio)) {
        echo <p class ='error'> *agrega tu municipio  </p;
    }else{
        if (!filter_var($municipio, filter_var)){
            echo"<p class ='error'> *La casilla municipio debe contener solo letras</p"
        }
    }

}  
