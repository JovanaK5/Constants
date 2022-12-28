<?php

  //define constant
 define("LANGUAGE", "PHP");

 //don't redefine the constant
 define("LANGUAGE","JAVA");

 //don't use the same variable and constant names
 $name = "John,Smith";
 define("name", "John,Smith");
 echo $name . name;

 //assign constant to variable and print
 $lang = LANGUAGE;
 echo "This is a Language: $lang";

 //magic constant
 echo __LINE__;

