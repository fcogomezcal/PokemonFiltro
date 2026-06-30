<?php

    //llamar cadena de conexión
    require_once("../config/conexion.php");  
    //llamar al modelo pokemon
    require_once("../models/Pokemon.php");
    //iniciar la clase pokemon
    $pokemon = new Pokemon();

    switch($_GET["op"]){
        case "listar":
            $datos=$pokemon->get_pokemon(@$_POST["tipo"], @$_POST["nombre"]);
            foreach($datos as $row){
                ?>
                    <div class="col-sm-4 col-md-3 col-lg-3 mb-3">
                        <div class="pokemon text-center p-2 border rounded shadow-sm h-100 text-break overflow-hidden" style="background-color: #fff;">
                            
                            <img src="<?php echo $row["imagengif"] ?>" alt="gif" class="img-fluid mt-2" style="max-height: 60px; width: auto;">
                            
                            <p class="text-muted small mt-2 mb-1">#<?php echo $row["number"] ?></p>
                            
                            <h4 class="text-wrap" style="font-size: 1.1rem; font-weight: bold;"><?php echo $row["nombre"] ?></h4>
                            
                            <span class="badge bg-secondary mb-2"><?php echo $row["tipo"] ?></span>
                            
                            <p class="mb-0" style="font-size: 0.9rem;">Ataque: <?php echo $row["attack"] ?></p>
                            <p class="mb-0" style="font-size: 0.9rem;">Defensa: <?php echo $row["defense"] ?></p>
                        </div>
                    </div>
                <?php
                
            }
            break;

        case "tipo":
            $datos=$pokemon->get_tipo();
            foreach($datos as $row){
                ?>
                    <label class="list-group-item d-flex gap-2">
                        <input type="checkbox" class="filtrodetalle form-check-input flex-shrink-0" name="tipos" value="<?php echo $row["tipo"] ?>"> 
                        <span>
                            <?php echo $row["tipo"] ?>
                        </span>
                    </label>
                <?php
                
            }
            break;

    }

?>