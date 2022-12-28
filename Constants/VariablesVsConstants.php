<?php

  //differences between variables and constants

  $name = "John,Smith";
  define("name","John,Smith");

  echo $name . name;

  //we are able to change variable but not constant
  echo "<hr>";

  $name = "Jovana";
 # define("name", "Jovana");
  echo $name . name;

  echo "<hr>";

  function print_constant(){
  //echo $name . constant('name');
  }
echo print_constant();

