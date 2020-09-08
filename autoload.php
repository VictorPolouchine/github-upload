<?php
spl_autoload_register(function($className) {

    $file = $_SERVER['DOCUMENT_ROOT'] . '/incl/' . $className . '.inc';
    if (file_exists($file)) {
        include_once($file);
    }
});
