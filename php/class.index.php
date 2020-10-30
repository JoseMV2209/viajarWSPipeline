<?php
class index extends contenido {

  var $tpl;
  var $db;
  var $js = array('');
  var $titulo;

  function __construct() {
    $this->js = array('/var/www/html/common/pi/global/js/jquery.tools.min.js');
  }

  function index() {
    $this->titulo = "Las mejores ofertas al mejor precio - ViajoFacil.com ";

    $this->loadclass("ofertas");
    $categorias = $this->objeto->consultar_categorias();
    $this->objeto->mostrar_categorias($categorias);
    $this->objeto->mostrar_formulario_ofertas($categorias);

    // listado de ofertas Agencia "slider" *********************************************************************
    $this->objeto->mostrar_listado_ofertas('jtools','<span>Ofertas destacadas</span>','');

    // enlaces de categorias con numero de ofertas *************************************************************
    $ofertasxcategoria = $this->objeto->consultar_listado_ofertasxcategoria();
    $this->objeto->mostrar_listado_ofertasxcategoria($ofertasxcategoria);

    // listados de ofertas por categorias **********************************************************************
    $array_ofertas_europa = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','Europa',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_europa,'mini1','<span id="ofertas_europa">OFERTAS EUROPA</span>','0');

    $array_ofertas_islascaribe = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','Islas y Caribe',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_islascaribe,'mini2','<span id="ofertas_islascaribe">OFERTAS ISLAS Y CARIBE</span>','0');

    $array_ofertas_2x1 = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','2x1',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_2x1,'mini3','<span id="ofertas_2x1">OFERTAS 2x1</span>','0');

    $array_ofertas_vacaciones = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','Vacaciones',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_vacaciones,'mini4','<span id="ofertas_vacaciones">VACACIONES</span>','0');

    $array_ofertas_cruceros = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','Cruceros',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_cruceros,'mini5','<span id="ofertas_2x1">CRUCEROS</span>','0');

    $array_ofertas_grandesviajes = $this->objeto->consultar_listado_ofertas("ofertas_agencias",'10','Grandes viajes',"","",false,false,"");
    $this->objeto->mostrar_listado_ofertas_simple($array_ofertas_grandesviajes,'mini6','<span id="ofertas_islascaribe">GRANDES VIAJES</span>','0');

  }
}
?>
