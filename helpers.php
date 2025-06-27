<?php

/**
 * @param string $path
 * @return string
 */
function basePath($path = '') : string {
    return __DIR__ . '/' . $path;
}

/**
 * Load a View
 * @param string $name
 * @return void
 */
 function loadView($name){
    $filePath = basePath("views/{$name}.view.php");
    if (file_exists($filePath)){
        require $filePath;
    } else {
        echo "The View: $name was not found";
    }
 }


/**
 * Load a Partial
 * @param string $name
 * @return void
 */
 function loadPartial($name){
    $filePath = basePath("views/partials/{$name}.php");
    if (file_exists($filePath)){
        require $filePath;
    } else {
        echo "The Partial: $name was not found";
    }
 }



 /**
  * Inspect Function for Troublehooting
  * @param mixed $value
  * @return void
  *
  */
  function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
  }


 /**
  * Inspect and die Function for Troublehooting
  * @param mixed $value
  * @return void
  *
  */
  function inspectAndDie($value){
    echo '<pre>';
    var_dump($value);
    echo '<pre>';
    die();
  }

