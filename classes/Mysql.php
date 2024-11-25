<?php

class Mysql{

    // public static function instagram(){
    //     echo "<h1 style='color:white;'>'@ehoje'</h1>";
    // }

    private static $pdo;

    public static function conectar(){
        if(self::$pdo == null){
            try{
                self::$pdo == new PDO('mysql:host='.HOST.';DBNAME='.DATABASE,USER,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(Exception $e){
                echo '<h2 style="color:red;">Erro ao conectar como banco de dados :(<h2>';
            }
            }
            return self::$pdo;
    }
}

?>