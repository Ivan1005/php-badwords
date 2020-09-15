<?php
 $text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';
 $badwords = $_GET["badwords"];
 $textReplace = str_replace($badwords,'***',$text,);
 echo   $textReplace  .  '<br>La lunghezza della stringa è: ' . strlen($textReplace) ;
 ?>
