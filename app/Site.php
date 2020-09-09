<?php

/*
 * Gère les paramètres du site
 */
class Site{
    public $siteName;
    public $siteLink;

    /**
     * Données de connexion à la base de donnée
     */
    protected static $sqlHost;
    protected static $sqlName;
    protected static $sqlUser;
    protected static $sqlPassword;

    /**
     * Initialisation du site avec ses paramètres
     */
    public function __construct($data){
        //Paramètres du site
        $this->siteName = $data['siteName'];
        $this->siteLink = $data['siteLink'];

        //Base de donnée
        self::$sqlHost = $data['sqlHost'];
        self::$sqlName = $data['sqlName'];
        self::$sqlUser = $data['sqlUser'];
        self::$sqlPassword = $data['sqlPassword'];
    }
}