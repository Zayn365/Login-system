<?php

spl_autoload_register('myautoLoader');

  function myautoLoader($classname)
  {

      $path = "/Applications/MAMP/htdocs/oopweb/classes/";
      $ext = ".class.php";
      $fullpath = $path . $classname . $ext;


//      require_once $fullpath;

  }