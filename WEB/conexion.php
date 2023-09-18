<?php

class Cconexion{

    static function ConexionBD(){
        $host ='localhost';
        $dbname= 'jm';
        $username='root';
        $pasword='';
        
        try {
            $conn = new PDO ("mysql:host=$host;dbname=$dbname",$username,$pasword);
            echo '<script language="javascript">alert("BD conectada");</script>';
        } catch (PDOException $exp) {
            echo '<script language="javascript">alert("BD NO conectada" + exp );</script>';
        }
        return $conn;
        
    }
}

?>
