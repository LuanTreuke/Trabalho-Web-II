<?php
    //definir o dominio do site
    define('INCLUDE_PATH', 'http://localhost/Trabalho-Web-II/');

    //Carregando a classe: 'Email'
    $autoload = function($class){
        include('assets/classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

?>