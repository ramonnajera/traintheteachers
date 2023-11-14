<?php
include_once 'models/UserModel.php';
include_once 'models/IntentoModel.php';
include_once 'models/ParticipanteModel.php';

class UserController{
    public function login(){
        $_respuestas = new responses();
        
        $numIntentos = $this->revisarIntentos();

        if(count($numIntentos) >=3){
            echo "Entre en 3 o mas";
            $fecha_actual = strtotime(date('Y-m-d H:i:s'));
            $ultimoIntento = end($numIntentos);
            $ultimoIntento = strtotime($ultimoIntento["intento_date"]);
            $diferencia = $fecha_actual - $ultimoIntento;

            if($diferencia > 300){
                $ip = end($numIntentos);
                $ip = $ip["intento_ip"];
            }else{
                $ip = False;
            }

        }elseif(count($numIntentos) == 0){
            echo "Entre en 0";
            $ip = $this->getIpAddr();
        }else{
            echo "Entre en 1 o 2";
            $ip = end($numIntentos);
            $ip = $ip["intento_ip"];
        }

        if($ip){
            $_IntentoModel = new IntentoModel();
            $_IntentoModel->setIntento_ip($ip);

            if (isset($_POST)) {
                $user = isset($_POST['user']) ? $_POST['user']."@uach.mx" :false;
                $pass = isset($_POST['pass']) ? $_POST['pass'] :false;
    
                $ldap_user = isset($_POST['user']) ? $_POST['user']:false;
    
                $user = Utils::limpiarData($user,"email");
                $user = Utils::validarData($user,"email");
    
                $pass = Utils::limpiarData($pass,"pass");
                
                $ldap_user = Utils::validarData($ldap_user,"texto");
                
                if($user && $pass){
                // Conexion con LDAP
                $ldapconn = ldap_connect("buzon.uach.mx","389")
                or die("Could not connect to LDAP server.");
                $id = "uid=".$ldap_user.",ou=People,o=uach.mx,o=uach.mx";
    
                $ldapbind = ldap_bind($ldapconn, $id, $pass);
        
                ldap_close($ldapconn);
    
                if($ldapbind){
    
                    $_UserModel = new UserModel();
                
                    $_UserModel->setUsuario_correo($user);
                    $_UserModel->setUsuario_pass($pass);
    
                    $identidad = $_UserModel->login();
    
                    if(!empty($identidad) && isset($identidad[0]['usuario_tipo'])){
                                          
                        $_SESSION['identidad'] = $identidad;
                        if($identidad[0]['usuario_tipo'] == "admin"){
                            $_SESSION['admin'] = true;
                        }elseif($identidad[0]['usuario_tipo'] == "user"){
                            $_SESSION['user'] = true;
                        }
    
                        $_respuestas->response;
                        $_respuestas->response["result"]["mensaje"] = "Login correcto";
                    }else{
                        if($ip){
                
                            $_IntentoModel->save();
        
                            $_respuestas->error_u00002();
                            $_respuestas->response["result"]["mensaje"] = "Usuario o contraseña incorrectos";
                        }
                    }
                }else{
                    if($ip){
            
                        $_IntentoModel->save();
        
                        $_respuestas->error_u00002();
                        $_respuestas->response["result"]["mensaje"] = "Usuario o contraseña incorrectos en ldap";
                    }
                }
                
                }else{
                    if($ip){
            
                        $_IntentoModel->save();
        
                        $_respuestas->error_u00001();
                    }
    
                }
    
                
            }else{
                if($ip){
        
                    $_IntentoModel->save();
        
                    $_respuestas->error_u00001();
                }
            }

        }else{
            $_respuestas->error_u00002();
            $_respuestas->response["result"]["mensaje"] = "Has alcanzado el límite de intentos de inicio de sesión";
        }

        $_SESSION['respuesta'] = [
            "status" => $_respuestas->response["status"],
            "mensaje" => $_respuestas->response["result"]["mensaje"]
        ];
        header("Location:".base_url);
    }

    // public function activar(){
    //     $_respuestas = new responses();
        
    //     $id = isset($_GET['id']) && !empty($_GET['id']) ? $_GET['id'] :false;
    //     $id = Utils::limpiarData($id,"int");
    //     $id = Utils::validarData($id,"int");
        
    //     $status = isset($_GET['status']) && !empty($_GET['status']) ? $_GET['status'] :false;
    //     $status = Utils::limpiarData($status,"boolean");
    //     $status = Utils::validarData($status,"boolean");

    //     if($id){
    //         $_UserModel = new UserModel();
    //         $_UserModel->setUsuario_id($id);
    //         $_UserModel->setUsuario_activo($status);
    //         $usuario = $_UserModel->updateActivo();
    //         if($usuario){
    //             $_respuestas->response["result"]["mensaje"] = "El usuario a sido activado";
    //         }else{
    //             $_respuestas->error_u00001();
    //         }
    //     }else{
    //         $_respuestas->error_u00001();
    //     }
        
    //     $_SESSION['respuesta'] = [
    //         "status" => $_respuestas->response["status"],
    //         "mensaje" => $_respuestas->response["result"]["mensaje"]
    //     ];

    //     header("Location:".base_url."Page/settings");
    // }

    public function signup(){
        $_respuestas = new responses();
        $curso = isset($_GET['curso']) && !empty($_GET['curso']) ? $_GET['curso'] :false;
        // r 
        $user = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] :false;
        $user = Utils::limpiarData($user,"texto");
        $user = Utils::validarData($user,"texto");

        $pass = isset($_POST['pass']) && !empty($_POST['pass']) ? $_POST['pass'] :false;
        $pass = Utils::limpiarData($pass,"pass");
        $pass = Utils::validarData($pass,"pass");

        $correo = isset($_POST['correo']) && !empty($_POST['correo']) ? $_POST['correo']."@uach.mx" :false;
        
        $correo = Utils::limpiarData($correo,"email");
        $correo = Utils::validarData($correo,"email");

        $ldap_user = isset($_POST['correo']) && !empty($_POST['correo']) ? $_POST['correo']:false;

        $area = isset($_POST['area']) && !empty($_POST['area']) ? $_POST['area'] :false;
        $area = Utils::limpiarData($area,"texto");
        $area = Utils::validarData($area,"texto");

        // // Conexion con LDAP
        $ldapconn = ldap_connect("buzon.uach.mx","389")
        or die("Could not connect to LDAP server.");
        $id = "uid=".$ldap_user.",ou=People,o=uach.mx,o=uach.mx";

        try {
            $ldapbind = ldap_bind($ldapconn, $id, $pass);
        } catch (Exception $e) {
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }

        ldap_close($ldapconn);

        if(isset($ldapbind) && $ldapbind){
            $_UserModel = new UserModel();
            
            $_UserModel->setUsuario_nombre($user);
            $_UserModel->setUsuario_pass($pass);
            $_UserModel->setUsuario_correo($correo);
            $_UserModel->setUsuario_area($area);
            
            if(!$curso){
                $save = $_UserModel->save();
            }else{
                $save = $_UserModel->save_id();
            }

            if($save){
                if($curso){
                    $_ParticipanteModel = new ParticipanteModel();
                    $_ParticipanteModel->setUsuario_id($save);
                    $_ParticipanteModel->setCurso_id($curso);

                    $inscrito = $_ParticipanteModel->buscarParticipante();

                    if(!$inscrito){
                        $savep = $_ParticipanteModel->save();
                    }else{
                        $_respuestas->response["status"] = "error";
                    }
                }
                $identidad = $this->loginRegistro($correo,$pass);
                if($identidad){
                    $_SESSION['identidad'] = $identidad;
                    if($identidad[0]['usuario_tipo'] == "admin"){
                        $_SESSION['admin'] = true;
                    }elseif($identidad[0]['usuario_tipo'] == "user"){
                        $_SESSION['user'] = true;
                    }
                    $_respuestas->response["result"]["mensaje"] = "Registro correcto";
                }else{
                    $_respuestas->error_u00001();
                }
            }else{
                $_respuestas->error_u00001();
            }

        }else{
            $_respuestas->error_u00002();
            $_respuestas->response["result"]["mensaje"] = "Usuario o contraseña en ldap incorrectos";
        }

        $_SESSION['respuesta'] = [
            "status" => $_respuestas->response["status"],
            "mensaje" => $_respuestas->response["result"]["mensaje"]
        ];
        
        header("Location:".base_url);
    }

    public function loginRegistro($user, $pass){
            
            if($user && $pass){

                $_UserModel = new UserModel();
            
                $_UserModel->setUsuario_correo($user);
                $_UserModel->setUsuario_pass($pass);

                $identidad = $_UserModel->login();

                if(!empty($identidad) && isset($identidad[0]['usuario_tipo'])){
                    $respuesta =$identidad;
                }else{
                    $respuesta =false;
                }
            
            }else{
                $respuesta =false;
            }
            return $respuesta;
    }

    public function getIpAddr(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])){
            $ipAddr=$_SERVER['HTTP_CLIENT_IP'];
        }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ipAddr=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ipAddr=$_SERVER['REMOTE_ADDR'];
        }
        return $ipAddr;
    }

    public function revisarIntentos(){
        $_respuestas = new responses();
        $_IntentoModel = new IntentoModel();
        $ip = $this->getIpAddr();
        $_IntentoModel->setIntento_ip($ip);

        $numIntentos = $_IntentoModel->getNumIntentos();

        return $numIntentos;
    }

    public function logout(){
        if (isset($_SESSION['identidad'])) {
            unset($_SESSION['identidad']);
        }

        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        header("Location:".base_url);
    }
}