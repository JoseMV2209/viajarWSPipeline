<?php
require_once("/var/www/html/common/pi/global/cfg/config.php");
define('DEV_MODE',0);
$error_reporting = error_reporting(DEV_MODE ? E_ALL & ~E_NOTICE : 0);
//define("DB_NAME","aavv_agencias");
//define("DB_NAME_EXTRANET","extranet_aavv");
//define("DB_GRUPO","aavv_agencias");
define("DOMINIO","viajarws.aavv.com");
define("NOMBRE_GRUPO","AAVV");
//define("URL_LOGOS","http://www.viajar.ws");
//define("URL_S","https://www.aavv.com");
define("PATH","/var/www/html/viajarws/");
define("IDG",20);
//define("NUMERO_OFERTAS_PAGINA",6);
//define("GMAPS_API_KEY","AIzaSyB6Px0EcEIbx9fZGhCie4hZgvLdNinwo7E");
define("MAILGRUPO","pipeline@pipeline.es");
define("DOMINIO_BOLETINES",'aavv');

$arr_modulos = array('servicios-viajero'=>'servicios_viajero',
  'ofertas' => 'ofertas',
  'ofertas-ultimate' => 'ofertas_ultimate',
  'reservas'=>'reservas',
  'ofertas-viajes'=>'ofertas',
  'contacta'=>'contacta',
  'captcha'=>'captcha',
  'index'=>'index',
  'sitemap'=>'sitemap',
  'rss'=>'rss',
);
/********* EL GRUPO TIENE BOLETINES Y FOLLETOS ???? ************************/
define("BOLETINES_GRUPO",true);
define("FOLLETOS_GRUPO",true);
    //RECAPTCHA, para poder cambiarlo por grupos, debe estar en el config de socios(zonapublica) y agencias(microsites)
define("PRIVATEKEY_RECAPTCHA","6LdoNtsSAAAAAJink_Z8OwWJWR5lWXe730yL7Z0E");
define("PUBLICKEY_RECAPTCHA","6LdoNtsSAAAAAH_M1a7YgFZ0enElRm1joAQtIAN0");
define("PUBLICKEY_RECAPTCHA_2_MULTIPLE_DOMAINS","6LfpzU0UAAAAAG6s9avGzW2VvgqDtZA0NTcQoaW-");
define("PRIVATEKEY_RECAPTCHA_2_MULTIPLE_DOMAINS","6LfpzU0UAAAAAApM54mnp2DK7YUQiKvUAs_tFEa7");
?>
