<?php

/*
* PHP CLI tools
* Author :Sarath
* Created: November 8 2013
*/
class input {
public static function read($msg=""){
       fwrite(STDOUT,"$msg:");
       $varin=trim(fgets(STDIN));
       return $varin;
   }

}

?>
