<?php

class Utils{
    public static function deleteSession($name){
        if (isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
        return $name;
    }

    public function limpiarData($data, $saneamiento){

        if($saneamiento == 'int'){
            $data = filter_var($data,FILTER_SANITIZE_NUMBER_INT);
        }

        if($saneamiento == 'float'){
            $data = filter_var($data,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        }

        if($saneamiento == 'email'){
            $data = trim($data);
            $data = filter_var($data,FILTER_SANITIZE_EMAIL);
        }

        if($saneamiento == 'texto'){
            // $data = filter_var($data,FILTER_SANITIZE_STRING);
            $data = preg_replace('([^A-Za-z0-9áéíóúÁÉÍÓÚÑñ .,-_:\n])', '', $data);
            $data = filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÁÉÍÓÚÑñ.,-_:\s]+$/")));
        }

        if($saneamiento == 'pass'){
            $data = filter_var($data,FILTER_SANITIZE_STRING);
            $data = preg_replace('([^A-Za-z.0-9_!])', '', $data);
            $data = filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÑñ!_.\s]+$/")));
        }

        if($saneamiento == 'identificador'){
            $data = filter_var($data,FILTER_SANITIZE_STRING);
            $data = preg_replace('([^A-Za-z0-9])', '', $data);
            $data = filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÑñ.\s]+$/")));
        }

        if($saneamiento == 'boolean'){
            $data = filter_var($data,FILTER_VALIDATE_BOOLEAN);
            $data = preg_replace('([^A-Za-z0-9])', '', $data);
            $data = filter_var($data, FILTER_VALIDATE_REGEXP, array("options" => array("regexp"=>"/^[\wáéíóúÑñ.\s]+$/")));
        }

        $data = trim($data);
        $data = str_replace("\\", "", $data);
        $data = str_replace("/", "", $data);
        $data = str_replace("--", "", $data);
        $data = str_replace("=", "", $data);
        $data = htmlspecialchars($data);
        
        return $data;
    }

    public function validarData($data, $type){
        if($type == 'phone'){
            $data = strlen((string)$data) == 10 ? $data :false;
        }

        if($type == 'phonep'){
            if(strlen((string)$data) == 10){
                $data = $data;
            }elseif(strlen((string)$data) == 0){
                $data = " ";
            }else{
                $data = false;
            }
        }

        if($type == 'email'){
            if(strlen($data) <= 50 && strlen($data) >=1){
                $data = filter_var($data, FILTER_VALIDATE_EMAIL);
            }elseif(strlen($data) == 0){
                $data = " ";
            }else{
                $data = false;
            }
        }

        if ($type == 'check') {
            if($data == 'on' || $data == 'off'){
                $data = $data;
            }else{
                $data = false;
            }
        }

        if ($type == 'bolean') {
            if($data){
                $data = $data;
            }else{
                $data = false;
            }
        }

        if($type == 'ext'){
            $data = strlen((string)$data) == 4 ? $data :false;
        }

        if($type == 'texto'){
            $data = strlen($data) <= 200 ? $data :false;
        }

        if($type == 'int'){
            if(ctype_digit($data)){
                $data = $data;
            }else{
                $data = false;
            }
        }

        return $data;

    }

    public static function isLog(){
        if (!isset($_SESSION['identidad']) || !isset($_SESSION['user'])) {
            header("Location:".base_url);
        }else{
            return true;
        }
    }

    public static function isAdmin(){
        if (!isset($_SESSION['admin'])) {
            header("Location:".base_url);
        }else{
            return true;
        }
    }
    

    public function preguntasFrecuentes(){
        $faqs = [
            [
                "question" => "¿Qué puedo hacer con lo aprendido en Train The Teachers?",
                "answer" => "El objetivo es que el aprendizaje obtenido se aplique directamente en el diseño de nuevas experiencias de aprendizaje o el mejoramiento de las existentes.",
            ],
            [
                "question" => "¿Cuál es la diferencia entre Train The Teachers y los cursos que ofrece el CUDD?",
                "answer" => "En esencia, ninguna. Los cursos de Train The Teachers también son gestionados y validados a través del CUDD. En cuanto a su forma, Train The Teachers es impartido por personal de la Coordinación de Tecnologías de Información de la UACH y se estructura a partir de micro-talleres de corta duración y rutas de aprendizaje.",
            ],
            [
                "question" => "¿Qué es una ruta de aprendizaje?",
                "answer" => "Train The Teachers se basa en el \"armado\" de ejes temáticos -llamados \"Rutas de Aprendizaje\"- que agrupan talleres que, una vez sumados, llevan al participante a desarrollar el dominio práctico de una habilidad, técnica o  herramienta concreta. Al día de hoy, Train The Teachers ofrece rutas de aprendizaje en temas como Diseño, Programación e Innovación; cada una con cursos sobre temas relevantes y prácticos.",
            ],
            [
                "question" => "¿Qué son los microcréditos?",
                "answer" => "Certificados que se conceden -en forma de insignias digitales infalsificables- al concluir satisfactoriamente cursos o talleres de corta duración. Los microcréditos pueden sumarse entre sí para acreditar un logro más extenso, como un taller o un diplomado. En Train The Teachers cada 20 horas acumuladas en microcréditos equivalen a un taller o curso convencional, con validez para el Programa de Estímulos al Desempeño Docente.",
            ],
            [
                "question" => "¿Qué es una insignia?",
                "answer" => "Es una imagen digital que representa un logro de aprendizaje. Las insignias se obtienen al acreditar satisfactoriamente un taller y se suman para obtener créditos equivalentes a un taller o curso convencional impartido en el CUDD.",
            ],
            [
                "question" => "Soy maestro hora-clase, ¿puedo tomar los talleres?",
                "answer" => "¡Por supuesto que sí! El objetivo es que todas y todos los docentes de la UACH cuenten con un espacio para aprender y mejorar sus habilidades tecnológicas, buscando en última instancia el impacto positivo en la calidad educativa.",
            ],
            [
                "question" => "Soy alumno de la UACH, ¿puedo tomar los cursos de Train The Teachers?",
                "answer" => "De momento no, aunque nos encantaría saber de ti para considerar tus inquietudes y ofrecer talleres para las y los alumnos.",
            ],
            [
                "question" => "No estoy en la UACH, ¿puedo tomar los cursos de Train The Teachers?",
                "answer" => "De momento no, aunque nos encantaría saber de ti para considerar tus requerimientos en futuras etapas del programa.",
            ],
            [
                "question" => "¿Cómo puedo inscribirme a los cursos?",
                "answer" => "Los cursos se publican en la página de Train The Teachers y se abren a inscripciones en fechas específicas. Para inscribirte, debes iniciar sesión con tu cuenta de la UACH y seleccionar el curso de tu interés. Si el curso está abierto a inscripciones, podrás inscribirte de inmediato. Si no, podrás registrarte en una lista de espera para ser notificado cuando el curso esté disponible.",
            ],

        ];

        return $faqs;
    }

}