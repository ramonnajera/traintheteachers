<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,700;1,900&display=swap" rel="stylesheet">
    <link href="<?=base_url?>/assets/css/global.css" rel="stylesheet">
    
    
    <title>Insignias UACH</title>
    <link rel="icon" href="../../assets/img/favicon.ico">

</head>
<body class="font-[Poppins] min-h-screen flex flex-col justify-start">
    


<nav class="flex items-center justify-between px-12 h-16 lg:gap-5 bg-[#45484c] border-gray-200">
<a href="<?=base_url?>" class="flex items-center">    
    <img src="https://teachers-xi.vercel.app/images/logo-white.png" class="h-6 mr-3 sm:h-9" >
</a>
    <div class="dropdown-menu absolute top-[64px] left-0 bg-[#45484c] w-full lg:flex lg:justify-between flex-col lg:flex-row gap-6 items-start py-2 text-lg font-medium hidden z-[2] lg:static">
        <ul class="text-white flex flex-col lg:flex-row items-start gap-6 hover:transition-all">
        <?php if(isset($_SESSION['identidad'])):?>
                <?php if(isset($_SESSION['admin'])):?>
            <li>
                <a href="<?=htmlspecialchars(base_url)?>"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0"hover:text-[#D5175E] 
                    aria-current="page">Mis talleres</a>
            </li>
            <li>
                <a href="<?=htmlspecialchars(base_url . "Page/carreras")?>"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0">Rutas de aprendizaje</a>
            </li>
                <?php elseif(isset($_SESSION['user'])):?>
                    <li>
                        <a href="<?=htmlspecialchars(base_url)?>"
                        class="block py-2 pl-3 pr-4 text-white  rounded hover:text-[#D5175E]  lg:p-0"
                        aria-current="page">Mis insignias</a>
                    </li>
                    <li>
                        <a href="<?=htmlspecialchars(base_url . "Carrera/alls")?>"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0">Todas las rutas</a>
                    </li>
                    <li>
                        <a href="<?=htmlspecialchars(base_url . "Curso/alls")?>"
                            class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0">Todos los talleres</a>
                    </li>

                <?php endif;?>
        <?php elseif(!isset($_SESSION['identidad'])):?>
            <!-- <li>
                <a href="#"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0"
                    aria-current="page">menu 1</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0"
                    aria-current="page">menu 1</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 pl-3 pr-4 text-white rounded hover:text-[#D5175E]  lg:p-0">menu 2</a>
            </li> -->
        <?php endif;?>
        </ul>
        <div class="flex flex-col lg:flex-row items-start gap-6 hover:transition-all mt-6 lg:mt-0">
        <?php if(isset($_SESSION['identidad'])):?>
            <a href="<?=htmlspecialchars(base_url . "User/logout")?>" class="btn btn-warning mx-3"><i class="fa-solid fa-arrow-right-from-bracket"></i> Salir</a>
            <?php elseif(!isset($_SESSION['identidad'])):?>
            <button data-open-modal class="btn btn-primary mx-3">Ingresar</button>
            <a href="<?=htmlspecialchars(base_url . "Page/registro")?>"
                class="block py-2 pl-3 pr-4 text-white border hover:bg-pink-400 hover:border-transparent ">Registro</a>
        <?php endif;?>
        </div>
    </div>
    <div class="toggle-button lg:hidden">
        <i class="fa-solid fa-bars fa-lg text-white"></i>
    </div>
</nav>

<dialog data-modal class="rounded-m ">
    <p class="text-2xl mb-5 pt-10 text-center">Ingresar</p>
    <form action="<?=htmlspecialchars(base_url . "User/login")?>" method="post">
        <div class="mb-3 px-5 flex flex-col">
            <label for="user" class="input-label">Correo</label>
            <div class="estemero flex">
                <input type="text" id="userlog" name="user" class="input-text1" placeholder="rnajera" required>
                <span dir="ltr" class="flex items-center whitespace-nowrap rounded-r-lg border border-l-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-700" id="basic-addon2" >@uach.mx</span>
            </div>
        </div>
        <div class="mb-5 px-5 w-80">
            <label for="pass" class="input-label">Contraseña</label>
            <input type="password" id="passlog" name="pass" class="input-text" required>
        </div>
        <div class=" pb-10 flex justify-center">
            <button data-close-modal class="btn  border border-gray-500 text-black hover:text-white hover:border-transparent hover:bg-[#D5175E] mx-5">Cerrar</button>
            <button type="submit" class="btn btn-primary mr-5">Entrar</button>
        </div>
    </form>
</dialog>

<?php require_once dirname(__FILE__).'../../includes/appmessages_v.php';?>