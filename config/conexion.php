<?php

  session_start();

  class Conexion{
    protected $dbh;

    public function conectar(){
      try {
        $conectar = $this->dbh = new PDO("mysql:host=localhost;dbname=intranet_sol", "root", "");
        return $conectar;
      } catch (Exception $e) {
        print "Error al conectar: " . $e->getMessage() . "</br>";
        die();
      }
    }

    public function set_names(){
      return $this->dbh->query("SET NAMES 'utf8'");
    }

    static public function ruta(){
      return "http://localhost/intranet_sol/";
    }

  }




?>