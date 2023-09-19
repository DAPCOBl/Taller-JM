<?php

class Cconexion{

    static function ConexionBD(){
        $host ='localhost';
        $dbname= 'jm';
        $username='root';
        $pasword='sena';
        
        try {
            $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$pasword);
            echo '<script language="javascript">alert("BD conectada");</script>';
        } catch (PDOException $exp) {
            echo ('BD NO conectada + exp');
        }
        return $conn;
        
    }
}

?>
