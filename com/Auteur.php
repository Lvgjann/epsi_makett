<?php
require_once('Message.php');

class Auteur extends Utilisateur
{
    function ecrire($message) {
        return new Message($message);
    }

    function ajouter_tag($message, $tag) {
        $message->ajouter_tags($tag);
    }

    function supprimer($message) {
        $message->__desctruct();
    }
}