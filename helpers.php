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
    $filePath = basePath("views/{$name}.view.php");
    if (file_exists($filePath)){
        require $filePath;
    } else {
        echo "The View: $name was not found bro";
    }
 }


/**
 * 
 * @param string $name
 * @return void
 */

 function loadPartial($name){
    $filePath = basePath("views/partials/{$name}.php");

    if (file_exists($filePath)){
        require $filePath;
    } else {
        echo "The Partial: $name was not found bro";
    }
 }