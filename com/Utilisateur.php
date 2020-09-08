<?php
require_once('Message.php');

$react = array(0=>"like", 1=>"dislike");

class Utilisateur
{
    public $id;
    public $nom;
    public $prenom;
    public $photo;

    function __construct($id, $nom, $prenom, $photo) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->photo = $photo;
    }

    function ajouter_reaction($message, $reaction) {
        $message->ajouter_reaction($reaction);
    }

    function supprimer_reaction($message, $reaction) {
    }

    function commenter($message, $commentaire) {
        $message->ajouter_commentaires($commentaire);
    }
}