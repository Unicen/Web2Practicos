<?php
  require('controller/vueloController.php');
  require('config/appConfig.php');
  
  $controllerVuelo = new VueloController();

  switch (isset($_GET[AppConfig::$ACTION]) ? $_GET[AppConfig::$ACTION] : AppConfig::$ACTION_DEFAULT ) {
      case AppConfig::$ACTION_SHOW_VUELOS:
          $controllerVuelo->getList('');
          break;
      case AppConfig::$ACTION_ADD_ESTADO_VUELO:
          $controllerVuelo->addEstadoVuelo();
          break;
      default:
          $controllerVuelo->getList('');
          break;
  }

?>
