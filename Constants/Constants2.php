<?php
  //sample1
  //define constant
  //define(NAME OF THE CONSTANT,VALUE OF THE CONSTANT);

 define("LANGUAGE", "PHP");
 $lang = LANGUAGE;

 echo "This program is written using $lang <br>";
 echo "This program is written using LANGUAGE <br>";

 echo "This program is written using".LANGUAGE." <br>";

 //sample2
 //changing the constant value
 define("LANGUAGE", "JAVA");
 echo "This program is written using".LANGUAGE." <br>";
