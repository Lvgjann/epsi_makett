<?php


class Post
{
    private $contenu;
    private $date;
    private $id_user;

    /**
     * Post constructor.
     * @param $contenu
     * @param $date
     * @param $id_user
     */
    public function __construct($contenu, $date, $id_user)
    {
        $this->contenu = $contenu;
        $this->date = $date;
        $this->id_user = $id_user;
    }

    /**
     * @return mixed
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param mixed $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * @param mixed $id_user
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }
}