<?php namespace Config;

class Request{
  private $area;
  private $tema;
  private $subtema;
  private $item;
  private $modifier = array();

  public function __construct(){
    //new List();
    if (isset($_GET['url'])){
      $ruta = filter_input(INPUT_GET,'url', FILTER_SANITIZE_URL);
      $ruta = explode("/",$ruta);
      print_r($ruta);

      foreach ($ruta as $key => $value) {
        // code...

      }

      $this->area = strtolower(array_shift($ruta));
      $temp_suburl = strtolower(array_shift($ruta));

      if ( !(strpos($temp_suburl,":") === false)  ){
        //echo "aquí se encuentran los filtros ".$temp_suburl;
        $temp_suburl = explode( "_" , $temp_suburl );
        print_r($temp_suburl);
        foreach ($temp_suburl as $key => $value) {
          $mod = explode(":",$value);
          print_r($mod);
          $this->modifier[$mod[0]] = $mod[1];

          // code...
        }
        print_r($this->modifier);

      }


      $this->tema = strtolower(array_shift($ruta));
      $this->subtema = strtolower(array_shift($ruta));
      $this->item = strtolower(array_shift($ruta));
      $this->modifier = strtolower(array_shift($ruta));

      if (!isset($this->area)){
        $ruta = "index.php";
      }
      if (isset($this->modifier)){
        $modifier = explode("_",$this->modifier);
        print_r($modifier);
      }
      print_r($ruta);


    }

  }



}

 ?>
