<?php
session_start();

/**
 * Class Autoloader
 */
class Autoloader{

    /**
     * Enregistre notre autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Inclue le fichier correspondant à notre classe
     * @param $class string Le nom de la classe à charger
     */
    static function autoload($class){
        require 'app/' . $class . '.php';
    }

}

Autoloader::register();

//Configuration du site
$Site = new Site(
    array(
        'siteName' => 'MicroBlog',
        'siteLink' => 'http://localhost:6565/',
        'sqlHost' => 'localhost',
        'sqlName' => 'microblog',
        'sqlUser' => 'root',
        'sqlPassword' => 'root'
    )
);

if(empty($_SESSION['user'])){
    header('location: connexion.php');
}