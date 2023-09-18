<?php

class Cconexion{

    static function ConexionBD(){
        $host ='localhost';
        $dbname= 'jm';
        $username='root';
        $pasword='';
        
        try {
            $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$pasword);
            echo "BD conectada";
        } catch (PDOException $exp) {
            echo ("BD NO conectada, $exp");
        }
        return $conn;
        
    }
}

?>
