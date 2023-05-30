<?php

spl_autoload_register(function ($className) {
    $filename = $className . '.php';
    if (file_exists($filename)) {
        include($filename);
    }
});


class DelRey extends Automovel{

    public function empurrar(){
        return "Empurrar ... ";
    }
}