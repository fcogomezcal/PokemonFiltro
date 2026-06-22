<?php

    //llamar cadena de conexión
    require_once("../config/conexion.php");  
    //llamar al modelo pokemon
    require_once("../models/Pokemon.php");
    //iniciar la clase pokemon
    $pokemon = new Pokemon();

    switch($_GET["op"]){
        case "listar":
            $datos=$pokemon->get_pokemon(@$_POST["tipo"], @$_POST["nombre"]); //en get_pokemon debemos pasarle el valor de tipo
            foreach($datos as $row){
                ?>
                    <div class="col-sm-4 col-lg-3 col-md-3">
                        <div class="pokemon text-center">
                            <img src="<?php echo $row["imagengif"] ?>" alt="" class="img-responsive" height="50" width="50">
                            <p><?php echo $row["number"] ?></p>
                            <h4><?php echo $row["nombre"] ?></h4>
                            <h5><?php echo $row["tipo"] ?></h5>
                            <p>Ataque: <?php echo $row["attack"] ?></p>
                            <p>Defensa: <?php echo $row["defense"] ?></p>
                        </div>
                    </div>
                <?php
                
            }
            break;

        case "tipo":
            $datos=$pokemon->get_tipo();
            foreach($datos as $row){
                ?>
                    <div class="list-group-item checkbox">
                        <label> <input type="checkbox" class="filtrodetalle" name="tipos" value="<?php echo $row["tipo"] ?>"> <?php echo $row["tipo"] ?> </label>
                    </div>
                <?php
                
            }
            break;

    }



?>