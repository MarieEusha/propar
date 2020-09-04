<?php 

require_once "Person.class.php";
require_once "management.class.php";

class Employee extends Person {
    protected $id;
    private $login;
    private $password;
    private $mail;
    private $status;


    public function __construct($lastname,$firstname,$login,$password,$mail,$status)
    {
        parent::__construct($lastname,$firstname);
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
        $this->status = $status;
    }



    public static function logIn($login){
        $query = 
        'SELECT
                *
        FROM 
            employee
        WHERE 
            login = :login';

       $employee = Management::findOne($query,[
           'login'=> $login
           ]);

    
        if(empty($employee) == true) {
            return false;
        }else{
            return $employee;
        }
        
    }
    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }


    

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

   

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}