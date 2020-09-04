<?php 

class Customer extends Person{
    private $mail;


    private function __construct($lastname,$firstname,$mail)
    {
        parent::__construct($lastname,$firstname);
        $this->mail = $mail;
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
}