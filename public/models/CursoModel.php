<?php
include_once "config/conection/conection.php";

class CursoModel extends conection{
    private $curso_id;
    private $usuario_id;
    private $carrera_id;
    private $curso_nombre;
    private $curso_descripcion;
    private $curso_modo;
    private $curso_status;
    private $curso_duracion;
    private $curso_instructor;
    private $curso_fecha;
    private $curso_horario;
    private $curso_insignia;
    private $curso_datec;

    public function __construct(){
        $this->conection = parent::__construct();
    }

    /**
     * Get the value of curso_id
     */ 
    public function getCurso_id()
    {
        return $this->curso_id;
    }

    /**
     * Set the value of curso_id
     *
     * @return  self
     */ 
    public function setCurso_id($curso_id)
    {
        $this->curso_id = $curso_id;

        return $this;
    }

    /**
     * Get the value of usuario_id
     */ 
    public function getUsuario_id()
    {
        return $this->usuario_id;
    }

    /**
     * Set the value of usuario_id
     *
     * @return  self
     */ 
    public function setUsuario_id($usuario_id)
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    /**
     * Get the value of carrera_id
     */ 
    public function getCarrera_id()
    {
        return $this->carrera_id;
    }

    /**
     * Set the value of carrera_id
     *
     * @return  self
     */ 
    public function setCarrera_id($carrera_id)
    {
        $this->carrera_id = $carrera_id;

        return $this;
    }

    /**
     * Get the value of curso_nombre
     */ 
    public function getCurso_nombre()
    {
        return $this->curso_nombre;
    }

    /**
     * Set the value of curso_nombre
     *
     * @return  self
     */ 
    public function setCurso_nombre($curso_nombre)
    {
        $this->curso_nombre = $curso_nombre;

        return $this;
    }

    /**
     * Get the value of curso_descripcion
     */ 
    public function getCurso_descripcion()
    {
        return $this->curso_descripcion;
    }

    /**
     * Set the value of curso_descripcion
     *
     * @return  self
     */ 
    public function setCurso_descripcion($curso_descripcion)
    {
        $this->curso_descripcion = $curso_descripcion;

        return $this;
    }

    /**
     * Get the value of curso_modo
     */ 
    public function getCurso_modo()
    {
        return $this->curso_modo;
    }

    /**
     * Set the value of curso_modo
     *
     * @return  self
     */ 
    public function setCurso_modo($curso_modo)
    {
        $this->curso_modo = $curso_modo;

        return $this;
    }

        /**
     * Get the value of curso_modo
     */ 
    public function getCurso_status()
    {
        return $this->curso_status;
    }

    /**
     * Set the value of curso_modo
     *
     * @return  self
     */ 
    public function setCurso_status($curso_status)
    {
        $this->curso_status = $curso_status;

        return $this;
    }

    /**
     * Get the value of curso_duracion
     */ 
    public function getCurso_duracion()
    {
        return $this->curso_duracion;
    }

    /**
     * Set the value of curso_duracion
     *
     * @return  self
     */ 
    public function setCurso_duracion($curso_duracion)
    {
        $this->curso_duracion = $curso_duracion;

        return $this;
    }

    /**
     * Get the value of curso_instructor
     */ 
    public function getCurso_instructor()
    {
        return $this->curso_instructor;
    }

    /**
     * Set the value of curso_instructor
     *
     * @return  self
     */ 
    public function setCurso_instructor($curso_instructor)
    {
        $this->curso_instructor = $curso_instructor;

        return $this;
    }

    /**
     * Get the value of curso_fecha
     */ 
    public function getCurso_fecha()
    {
        return $this->curso_fecha;
    }

    /**
     * Set the value of curso_fecha
     *
     * @return  self
     */ 
    public function setCurso_fecha($curso_fecha)
    {
        $this->curso_fecha = $curso_fecha;

        return $this;
    }

    /**
     * Get the value of curso_horario
     */ 
    public function getCurso_horario()
    {
        return $this->curso_horario;
    }

    /**
     * Set the value of curso_horario
     *
     * @return  self
     */ 
    public function setCurso_horario($curso_horario)
    {
        $this->curso_horario = $curso_horario;

        return $this;
    }

    /**
     * Get the value of curso_insignia
     */ 
    public function getCurso_insignia()
    {
        return $this->curso_insignia;
    }

    /**
     * Set the value of curso_insignia
     *
     * @return  self
     */ 
    public function setCurso_insignia($curso_insignia)
    {
        $this->curso_insignia = $curso_insignia;

        return $this;
    }

    /**
     * Get the value of curso_datec
     */ 
    public function getCurso_datec()
    {
        return $this->curso_datec;
    }

    /**
     * Set the value of curso_datec
     *
     * @return  self
     */ 
    public function setCurso_datec($curso_datec)
    {
        $this->curso_datec = $curso_datec;

        return $this;
    }

    public function getAll(){
        $sql = "SELECT * FROM cursos
        INNER JOIN usuarios ON usuarios.usuario_id = cursos.usuario_id
        WHERE carrera_id= :carrera_id;";

        $data = [
            "carrera_id" => $this->getCarrera_id(),
        ];

        $cursos = parent::obtenerDatos($sql,$data);
        
        return $cursos;
    }

    public function getAlls(){
        $sql = "SELECT * FROM cursos;";


        $cursos = parent::obtenerDatos($sql);
        
        return $cursos;
    }

    public function getOne(){
        $sql = "SELECT * FROM carreras INNER JOIN cursos ON carreras.carrera_id = cursos.carrera_id WHERE cursos.carrera_id = :carrera_id";

        $data = [
            "carrera_id" => $this->getCarrera_id(),
        ];

        $cursos = parent::obtenerDatos($sql, $data);
        
        return $cursos;
    }

    public function getMisAll(){
        $sql = "SELECT * FROM carreras INNER JOIN cursos ON carreras.carrera_id = cursos.carrera_id WHERE usuario_id=:usuario_id";

        $data = [
            "usuario_id" => $this->getUsuario_id(),
        ];

        $cursos = parent::obtenerDatos($sql, $data);
        
        return $cursos;
    }

    public function save(){

        $sql = "INSERT INTO cursos (usuario_id, carrera_id, curso_nombre, curso_descripcion, curso_modo, curso_duracion, curso_instructor, curso_fecha, curso_horario, curso_insignia) VALUES(:usuario_id, :carrera_id, :curso_nombre, :curso_descripcion, :curso_modo, :curso_duracion, :curso_instructor, :curso_fecha, :curso_horario, :curso_insignia);";

        $data = [
            "usuario_id" => $this->getUsuario_id(),
            "carrera_id" => $this->getCarrera_id(),
            "curso_nombre" => $this->getCurso_nombre(),
            "curso_descripcion" => $this->getCurso_descripcion(),
            "curso_modo" => $this->getcurso_modo(), 
            "curso_duracion" => $this->getCurso_duracion(), 
            "curso_instructor" => $this->getCurso_instructor(), 
            "curso_fecha" => $this->getCurso_fecha(), 
            "curso_horario" => $this->getCurso_horario(),
            "curso_insignia" => $this->getCurso_insignia(),
        ];

        
        $save = parent::nonQuery($sql, $data);

        $result = false;
        
        if($save){
            $result = true;
        }
        
        return $result;
    }

    public function changeStatus(){
        $status= $this->getCurso_status();

        if($status == "1"){
            $status = 0;
        }else{
            $status = 1;
        }

        $sql = "UPDATE cursos SET curso_status='$status' WHERE curso_id=:curso_id;";

        $data = [
            "curso_id" => $this->getCurso_id(),
        ];

        $update = parent::nonQuery($sql, $data);

        $result = false;
        
        if($update){
            $result = true;
        }
        
        return $result;
    }

    public function delete(){
        $sql = "DELETE FROM cursos WHERE curso_id=:curso_id;";

        $data = [
            "curso_id" => $this->getCurso_id(),
        ];

        $delete = parent::nonQuery($sql, $data);

        $result = false;
        
        if($delete){
            $result = true;
        }
        
        return $result;
    }

}