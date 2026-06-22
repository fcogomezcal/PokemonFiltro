<?php

    class Pokemon extends Conectar{

        //en get_pokemon debemos pasarle el valor de tipo
        public function get_pokemon($tipo, $nombre){
            $conectar = parent::conexion();
            parent::set_names();
            // Consulta base: trae todos los Pokémon activos (est = 1)
            $sql = "select * from tm_pokemon where est=1 "; // modificar el query para soportar el array que viene desde la vista

            if(isset($tipo)){ // si viene información de tipo, entonces se le agrega a la consulta sql
                $tipo = implode("','", $tipo); //convertir el array en una cadena de texto separada por comas
                $sql.="and tipo in ('".$tipo."')"; //agregar la condición de tipo a la consulta sql
            }

            // pasar la consulta al modelo 
            if(isset($nombre)){ // si viene información de nombre, entonces se le agrega a la consulta sql
                $sql.="and nombre like ('%".$nombre."%')"; //agregar la condición de nombre a la consulta sql
            }

            $sql = $conectar->prepare($sql);
            
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_tipo(){
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "select distinct tipo from tm_pokemon";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>