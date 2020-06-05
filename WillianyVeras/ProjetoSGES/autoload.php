<?php
spl_autoload_register(function ($name){
    $include = str_replace("ProjetoSGES", "..", $name);
    $include = str_replace("\\", DIRECTORY_SEPARATOR, $include) . ".php";
    require $include;
});