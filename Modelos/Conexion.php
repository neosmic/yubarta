<?php namespace Modelos;

class Conexion{
    private $datos = array();
    private $conn;

    public function __construct(){
      $boot_data = json_decode(file_get_contents("Config/boot.json"), true);
      $boot_data = $boot_data['dbdata'];
      //print_r($boot_data);
      foreach ($boot_data as $key => $value) {
        $this->datos[$key] = $value;
        //print_r($this->datos);
      }
      //print_r($this->datos['host']);
      $this->conn = new \mysqli($this->datos['host'],
                                $this->datos['user'],
                                $this->datos['pass'],
                                $this->datos['db']
                              );


    }
    public function get($atributo){
      return $this->$atributo;
    }
    public function set($atributo, $contenido){
      $this->$atributo = $contenido;
    }



    public function consultaSimple($sql){
      $this->conn->query($sql);
    }
    public function consultaRetorno($sql){
      $datos = $this->conn->query($sql);
      if ($datos){
        $raw_data_out = mysqli_fetch_all($datos,MYSQLI_ASSOC);
        //print_r($datos);
      }else{
        $raw_data_out = false;
      }

      return $raw_data_out;

    }
}


 ?>
