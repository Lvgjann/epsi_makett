<?php


class User
{
    private $nom;
    private $prenom;
    private $photo;
    private $password;
    private $id_group;

    public function __construct($nom, $prenom, $photo, $password, $id_group)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->photo = $photo;
        $this->password = $password;
        $this->id_group = $id_group;
    }

    public static function login($login, $password){
        if(!empty($login) && !empty($password)){
            $login = explode('.', $login);
            $nom = $login[0];
            $prenom = $login[1];

            $user = Database::query(
                'SELECT * FROM utilisateur WHERE nom = ? AND prenom = ? AND password = ?',
                true,
                [$nom, $prenom, $password],
                true
            );

            if(!empty($user)){
                $_SESSION = $user['id'];
                header('location: index.php');
            }
            return 'Mauvais identifiants.';
        }
        return 'Un ou plusieurs champs est vide.';
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getIdGroup()
    {
        return $this->id_group;
    }

    /**
     * @param mixed $id_group
     */
    public function setIdGroup($id_group)
    {
        $this->id_group = $id_group;
    }

}