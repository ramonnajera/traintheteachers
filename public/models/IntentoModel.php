<?php
include_once "config/conection/conection.php";

class IntentoModel extends conection{
    private $intento_id;
    private $intento_ip;
    private $intento_date;

    public function __construct(){
        $this->conection = parent::__construct();
    }

    

    /**
     * Get the value of intento_id
     */ 
    public function getIntento_id()
    {
        return $this->intento_id;
    }

    /**
     * Set the value of intento_id
     *
     * @return  self
     */ 
    public function setIntento_id($intento_id)
    {
        $this->intento_id = $intento_id;

        return $this;
    }

    /**
     * Get the value of intento_ip
     */ 
    public function getIntento_ip()
    {
        return $this->intento_ip;
    }

    /**
     * Set the value of intento_ip
     *
     * @return  self
     */ 
    public function setIntento_ip($intento_ip)
    {
        $this->intento_ip = $intento_ip;

        return $this;
    }

    /**
     * Get the value of intento_date
     */ 
    public function getIntento_date()
    {
        return $this->intento_date;
    }

    /**
     * Set the value of intento_date
     *
     * @return  self
     */ 
    public function setIntento_date($intento_date)
    {
        $this->intento_date = $intento_date;

        return $this;
    }

    public function save(){

        $sql = "INSERT INTO intentos (intento_ip) VALUES(:intento_ip);";

        $data = [
            "intento_ip" => $this->getIntento_ip(),
        ];

        
        $save = parent::nonQuery($sql, $data);

        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }

    public function getNumIntentos(){
        $sql = "SELECT * FROM intentos WHERE intento_ip=:intento_ip ORDER BY intento_date";

        $data = [
            "intento_ip" => $this->getIntento_ip(),
        ];

        $intentos = parent::obtenerDatos($sql, $data);
        
        return $intentos;
    }
}