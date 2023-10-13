<?php
include_once 'models/CarreraModel.php';
include_once 'models/CursoModel.php';
include_once 'models/ParticipanteModel.php';

class CarreraController{
    public function add(){
        $_respuestas = new responses();

        if (isset($_POST)) {
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] :false;
            $descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] :false;
            $img = empty($_FILES['img']['name']) == 0 ? $_FILES['img'] :false;
            $insignia = empty($_FILES['insignia']['name']) == 0 ? $_FILES['insignia'] :false;

            $nombre = Utils::limpiarData($nombre,"texto");
            $descripcion = Utils::limpiarData($descripcion,"texto");

            $nombre = filter_var($nombre, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÁÉÍÓÚÑñ123456789:;., \-\s]+$/")));
            $descripcion = filter_var($descripcion, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÁÉÍÓÚÑñ123456789<>:;., \-\s]+$/")));
            $descripcion = nl2br($descripcion);
            
            if ($nombre && $descripcion) {

                $_CarreraModel = new CarreraModel();
                $subido = $this->subirImagen($img);
                $subido2 = $this->subirImagen($insignia);

                if($subido["subido"] && $subido2["subido"]){
                    $_CarreraModel->setCarrera_img($subido["nombre"]);
                    $_CarreraModel->setCarrera_insignia($subido2["nombre"]);
                    $_CarreraModel->setCarrera_nombre($nombre);
                    $_CarreraModel->setCarrera_descripcion($descripcion);
                    
                    $save = $_CarreraModel->save();

                    if ($save) {
                        $_respuestas->response["result"]["mensaje"] = "Registro correcto";
                    }else{
                        unlink("assets/img/images/" . $subido["nombre"]);
                        unlink("assets/img/images/" . $subido2["nombre"]);
                        $_respuestas->error_u00001();
                    }
                }else{
                    $_respuestas->error_u00001();
                }
            }else{
                $_respuestas->error_u00001();
            }

        }else{
            $_respuestas->error_u00001();
        }

        $_SESSION['respuesta'] = [
            "status" => $_respuestas->response["status"],
            "mensaje" => $_respuestas->response["result"]["mensaje"]
        ];
        header("Location:".base_url."Page/carreras");
    }

    public function subirImagen($archivo){
        Utils::isAdmin();
        $dir ="assets/img/images/";
        $arregloArchivo = explode(".", $archivo['name']);
        $extension = strtolower(end($arregloArchivo));
        $nombre = uniqid() . "." . $extension;
        $permitidos = array('png', 'svg');
        $ruta_carga = $dir . $nombre;

        if(in_array($extension, $permitidos)){
            if(!file_exists($dir)){
                mkdir($dir, 0777);
            }
            
            $subido = move_uploaded_file($archivo['tmp_name'], $ruta_carga);

        }else{
            $subido = false;
        }

        $resultado = array(
            "subido" => $subido,
            "nombre" => $nombre
        );

        return $resultado;
    }

    public function delete(){
        Utils::isAdmin();
        $_respuestas = new responses();
        if($_GET){
            $id = isset($_GET['id']) ? $_GET['id'] :false;
            $id = filter_var($id, FILTER_VALIDATE_INT);

            if($id){
                $_CarreraModel = new CarreraModel();
                $_CarreraModel->setCarrera_id($id);

                $delete = $_CarreraModel->delete();

                if ($delete) {
                    $_respuestas->response["result"]["mensaje"] = "Delete correcto";
                }else{
                    $_respuestas->error_u00001();
                }

            }else{
                $_respuestas->error_u00001();
            }
        }

        $_SESSION['respuesta'] = [
            "status" => $_respuestas->response["status"],
            "mensaje" => $_respuestas->response["result"]["mensaje"]
        ];
        header("Location:".base_url."Page/carreras");
    }

    public function carrera(){
        $_respuestas = new responses();
        $id = isset($_GET['id']) ? $_GET['id'] :false;

        
        if($id){
            $_CarreraModel = new CarreraModel();
            $_CarreraModel->setCarrera_id($id);
            $carrera = $_CarreraModel->getOne();
            
            $_CursoModel = new CursoModel();
            $_CursoModel->setCarrera_id($id);
            $cursos = $_CursoModel->getAll();

            if(isset($_SESSION['identidad'])){
                $_ParticipanteModel = new ParticipanteModel();
                $_ParticipanteModel->setUsuario_id($_SESSION["identidad"][0]["usuario_id"]);
                $cursos_inscrito=$_ParticipanteModel->getAllCursosInscrito();
                $cursos_inscrito=array_map(function ($curso) {
                    return $curso["curso_id"];
                }, $cursos_inscrito);
            }

        }else{
            $_respuestas->error_u00001();
        }
        require_once 'views/page/carrera_v.php';
    }

    public function alls(){
        Utils::isLog();
        $_CarreraModel = new CarreraModel();
        $carreras = $_CarreraModel->getAll();
        require_once 'views/page/rutass_v.php';
    }

    
}