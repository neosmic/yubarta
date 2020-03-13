<?php namespace Vistas;

class Items{
    public $layout = "standar";
    public $linked = false;
    public $maintag = "div";
    public $secondarytag = "div";
    public $downloadable = false;
    public $orderdata = array("image","title","date","description") ;

    public function __construct($confJSON){
        foreach ($confJSON as $key => $value) {
            if ($value != ""){
                $this->$key = $value;
                echo "<br>".$key."<br>";
                print_r($this->$$key);

            }
            # code...
        }

    }
    
    public function showFront($dataJSON){ 
        print_r($this->orderdata);
        echo "<".$this->maintag." class=\"item_".$this->layout."\" >";
        echo ($this->linked == true) ? "<a href='".$dataJSON['link']."' >" : "";

        foreach ($this->orderdata as $value) {
            if (array_key_exists($value, $dataJSON)) :
                echo "<".$this->secondarytag." class=\"item_".$value." \" >";
                //Según el tipo de dato se llama la etiqueta: por ejemplo una imagen se llama de manera diferente

                    switch ($value) {
                        case 'image':
                            echo "<img src=\"".$dataJSON["image"]."\" alt=\"".$dataJSON["title"]."\" >";
                            break;
                        
                        case 'download':
                            echo "<a href=\"{$dataJSON[$value]}\" >{$dataJSON["title"]}</a>";
                            break;
                        default:
                            echo $dataJSON[$value];
                            break;
                    }


                echo "</".$this->secondarytag.">";
                //else: echo "no existe ".$value." en data";
            endif;
            
        }
        


        echo ($this->linked) ? "</a>" : "";
        echo "</".$this->maintag.">";



       }


}

?>