<?php
  
  error_reporting(E_ALL);
  require 'helpers/app.php';
  require 'controller/User.php';

  $route = get('route');

  $route = explode('@',$route);

  $Class = $route[0];
  $Method = $route[1];

  $Run = new $Class();
  $Run->$Method();



  print_r(($route));


?>