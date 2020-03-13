<?php
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS );

require_once "Config/Autoload.php";
Config\Autoload::run();
//$itemModelo = new Modelos\Items("new10021");

//$itemVista->starting();

$datos_conf = array(
    "layout" => "bookslist",
    "linked" => true,
    "maintag" => "div",
    "downloadable" => false,
    "orderdata" => array("title","area","tema","date","download")
    );
$datos_test = array(
    'title' => "Expedicionarios llegan a la Antártida",
    "description" => "En la última expedición científica de Colombia a la Antártida participan 25 expedicionarios",
    "image" => "http://www.cco.gov.co/docs/images/galerias/2020-02-25/intro.jpg",
    "date" => "3 de enero de 2020",
    "link" => "http://senalmar.cco.gov.co",
    "download" => "http://cco.gov.co",
    "area" => "Asuntos Internacionales",
    "tema" => "Programa Antártico Colombiano"
);
$itemVista = new Vistas\Items($datos_conf);

$itemVista->showFront($datos_test);
//new Config\Request();
//List("list0001")::showlist() ;
//$listadoNoticias = new System\Listado("list0001");

//echo "<br> ".$listadoNoticias->mostrarParametro("pub_fields");
//$listadoNoticias->cargarContenido("publicado");

$hotel1 = new Modelos\Items("new10029");
echo "<br>".$hotel1->parent_title;
echo "<br>".$hotel1->title;
echo "<br>".$hotel1->linked;
$hotel1->showItem();
//new System\General();


 ?>
