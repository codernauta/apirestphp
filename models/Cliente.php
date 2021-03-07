<?php
    require_once "connection/Connection.php";

    class Cliente {

        public static function getAll() {
            $db = new Connection();
            $query = "SELECT *FROM clientes";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'ap' => $row['ap'],
                        'am' => $row['am'],
                        'fn' => $row['fn'],
                        'genero' => $row['genero']
                    ];
                }//end while
                return $datos;
            }//end if
            return $datos;
        }//end getAll

        public static function getWhere($id_cliente) {
            $db = new Connection();
            $query = "SELECT *FROM clientes WHERE id=$id_cliente";
            $resultado = $db->query($query);
            $datos = [];
            if($resultado->num_rows) {
                while($row = $resultado->fetch_assoc()) {
                    $datos[] = [
                        'id' => $row['id'],
                        'nombre' => $row['nombre'],
                        'ap' => $row['ap'],
                        'am' => $row['am'],
                        'fn' => $row['fn'],
                        'genero' => $row['genero']
                    ];
                }//end while
                return $datos;
            }//end if
            return $datos;
        }//end getWhere

        public static function insert($nombre, $ap, $am, $fn, $genero) {
            $db = new Connection();
            $query = "INSERT INTO clientes (nombre, ap, am, fn, genero)
            VALUES('".$nombre."', '".$ap."', '".$am."', '".$fn."', '".$genero."')";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end insert

        public static function update($id_cliente, $nombre, $ap, $am, $fn, $genero) {
            $db = new Connection();
            $query = "UPDATE clientes SET
            nombre='".$nombre."', ap='".$ap."', am='".$am."', fn='".$fn."', genero='".$genero."' 
            WHERE id=$id_cliente";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end update

        public static function delete($id_cliente) {
            $db = new Connection();
            $query = "DELETE FROM clientes WHERE id=$id_cliente";
            $db->query($query);
            if($db->affected_rows) {
                return TRUE;
            }//end if
            return FALSE;
        }//end delete

    }//end class Cliente
