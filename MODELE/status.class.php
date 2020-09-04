<?php 

class Status {

    private $id_status;
    private $label;

    public function __construct($label)
    {
        $this->label = $label;
    }

    /**
     * Get the value of id_status
     */ 
    public function getId_status()
    {
        return $this->id_status;
    }


    /**
     * Get the value of label
     */ 
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set the value of label
     *
     * @return  self
     */ 
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }
}