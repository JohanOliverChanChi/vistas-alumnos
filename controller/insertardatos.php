18 lines (14 sloc)  530 Bytes
   
<?php

    if (filter_input_array(INPUT_POST)) {
                    
        $_id =  trim(filter_input(INPUT_POST, 'id'));   
        $_nombre = trim(filter_input(INPUT_POST, 'nombre'));
        $_sexo = trim(filter_input(INPUT_POST, 'sexo'));
        include_once '../model/modelAlumnos.php';

        $insert = alumnos::insert($_id,$_nombre,$_sexo);
        if ($insert){
            header("location: ../index.php?menu=alumnos");
        } else{
            echo 'Error, no se pudo actualizar';
        }
    }

?>