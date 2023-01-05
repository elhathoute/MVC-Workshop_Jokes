<?php
session_start();
require_once('bootstrap.php');
spl_autoload_register('autoload');//autoload  =>callback function

      
function autoload($class_name){

    
$array_paths = array(
'database/',
'app/classes/',
'models/',
'controllers/');
// les fichier sont recuperer sous forme \\ 
//ex: app\classes\session
    $parts = explode('\\', $class_name);


    //couper name of classe
    // ex: app\classes\redirect
    // dont ce cas la redirect va supp donc le rest est app\classes name of classe
    $name = array_pop($parts);
    
    
    foreach($array_paths as $path){
        $file = sprintf($path . '%s.php', $name);  //concatenation

        if(is_file($file)){
            include_once($file);
        }
    }

}

?>