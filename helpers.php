<?php

/**
 * @param string $path
 * @return string
 */
function basePath($path = '') : string {
    return __DIR__ . '/' . $path;
}

/**
 * 
 * @param string $name
 * @return void
 */

 function loadView($name){
    require basePath("views/{$name}.view.php");
 }


/**
 * 
 * @param string $name
 * @return void
 */

 function loadPartial($name){
    require basePath("views/partials/{$name}.php");
 }