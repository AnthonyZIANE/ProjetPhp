<?php


include 'base.php';



class User
{
    private $pseudo;
    private $password;
    private $mail;
    private $user_id;
    private $state;
    private $phone;
    private $country;
    private $user_date;
    private $gender;



    public function __construct()
    {
    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }


    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @return mixed
     */
    public function getUserDate()

class User
{
    private $dbLink;
    private $action;
    private $email;
    private $password;
    private $identifiant;
    private $sexe;
    private $telephone;
    private $pays;
    private $conditions;

    public function __construct()

    {
        return $this->user_date;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @param mixed $user_date
     */
    public function setUserDate($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    function addUser()
    {

        $dbLink = $GLOBALS['dbLink'];
        $action = $_POST['action'];
        $email = $_POST['mail'];
        $password = $_POST['mdp'];
        $identifiant = $_POST['identifiant'];
        $sexe = $_POST['genre'];
        $telephone = $_POST['phone'];
        $pays = $_POST['pays'];
        $conditions = 'member';

        if ($action == 'inscription') {
            $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state) 


        $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state) 
        VALUES ( \'' . $email . '\' ,
         \'' . $identifiant . '\',
         \'' . $password . '\' ,
         \'' . $telephone . '\' ,
         \'' . $pays . '\' ,
         NOW(),
         \'' . $sexe . '\' ,
         \'' . $conditions . '\'
         )';


        if (!($dbResult = mysqli_query($dbLink, $query))) {
            echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
            echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
            echo 'Requête : ' . $query . '<br/>';
            exit();
        } else {
            echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
            echo '<br/><strong>Mail envoyé !</strong><br/>';
        }
    }

    }

}




?>



