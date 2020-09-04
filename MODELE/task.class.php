<?php 

class Task {

    private $id_task;
    private $label;
    private $description;
    private $order_date;
    private $in_progess_date;
    private $ending_date;
    private $idEmployee;
    private $id_customer;
    private $id_type;

    private function __construct($label,$description,$id_customer,$id_type){
        $this->label = $label;
        $this->description = $description;
        $this->id_customer = $id_customer;
        $this->id_type = $id_type;
    }

    

    /**
     * Get the value of id_task
     */ 
    public function getId_task()
    {
        return $this->id_task;
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

    

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of idEmployee
     */ 
    public function getIdEmployee()
    {
        return $this->idEmployee;
    }




    /**
     * Get the value of in_progess_date
     */ 
    public function getIn_progess_date()
    {
        return $this->in_progess_date;
    }

    /**
     * Set the value of in_progess_date
     *
     * @return  self
     */ 
    public function setIn_progess_date($in_progess_date)
    {
        $this->in_progess_date = $in_progess_date;

        return $this;
    }

    /**
     * Get the value of ending_date
     */ 
    public function getEnding_date()
    {
        return $this->ending_date;
    }

    /**
     * Set the value of ending_date
     *
     * @return  self
     */ 
    public function setEnding_date($ending_date)
    {
        $this->ending_date = $ending_date;

        return $this;
    }

    /**
     * Set the value of order_date
     *
     * @return  self
     */ 
    public function setOrder_date($order_date)
    {
        $this->order_date = $order_date;

        return $this;
    }

    /**
     * Get the value of id_customer
     */ 
    public function getId_customer()
    {
        return $this->id_customer;
    }

    /**
     * Get the value of id_type
     */ 
    public function getId_type()
    {
        return $this->id_type;
    }

    /**
     * Get the value of order_date
     */ 
    public function getOrder_date()
    {
        return $this->order_date;
    }
}