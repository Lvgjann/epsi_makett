<?php
require_once('Utilisateur.php');


class Message
{
    public $id;
    public $date;
    public $contenu;
    public $commentaires = [];
    public $reactions = [];
    public $tags = [];

    function __construct($contenu)
    {
        $this->date = getdate();
        $this->contenu = $contenu;
    }

    function ajouter_tags($tags) {
        $this->tags = $tags;
    }

    function ajouter_reactions($reactions) {
        $this->reactions = $reactions;
    }

    function ajouter_commentaire($commentaire) {
        array_push($this->commentaires, $commentaire);
    }
}