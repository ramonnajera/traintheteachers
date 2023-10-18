<div>
    <?php if(isset($_SESSION['identidad']) && isset($_SESSION['admin'])):?>
    <div class="flex justify-end">
        <button data-open-modal class="btn btn-primary mx-3 mt-4">Nuevo taller</button>
        <dialog data-modal class="rounded-md p-10">
            <p class="text-2xl mb-5">Nuevo taller</p>
            <form action="<?=htmlspecialchars(base_url . "Curso/add")?>" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="carrera" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ruta de aprendisaje</label>
                    <select id="carrera" name="carrera" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <?php foreach($carreras as $carrera):?>
                        <option value="<?=$carrera["carrera_id"]?>"><?=$carrera["carrera_nombre"]?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="input-label">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="input-text" placeholder="Primeros pasos para entrar al metaverso" required>
                </div>
                <div class="mb-3">
                    <label for="derscripcion" class="input-label">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="input-text" rows="4" placeholder="Aqui descripcion..." required></textarea>
                </div>
                <div class="mb-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="modo">Modo</label>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" name="modo" id="modo" name="modo">
                        <option value="virtual">Virtual</option>
                        <option value="presencial">Presencial</option>
                    </select>

                </div>
                <div class="mb-3"> 
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="duracion">Numero de horas</label>
                    <input type="number" id="duracion" name="duracion" class="input-text" required>
                </div>
                <div class="mb-3">
                    <label for="instructor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Instructor</label>
                    <select id="carrera" name="instructor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <?php foreach($instructores as $instructor):?>
                        <option value="<?=$instructor["usuario_id"]?>"><?=$instructor["usuario_nombre"]?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="start">Fecha de inicio</label>
                    <input type="date" id="fecha" name="fecha" value="<?=date('Y-m-d')?>" min="2018-01-01" />
                </div>
                <div class="mb-3">
                    <label for="horario" class="input-label">Horario</label>
                    <textarea id="horario" name="horario" class="input-text" rows="2" placeholder="Aqui el horario..." required></textarea>
                </div>
                <div class="mb-3"> 
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="insignia">Insignia del curso</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none " aria-describedby="insignia_help" id="insignia" name="insignia" type="file" required>
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="insignia_help">PNG (MAX. 800x400px).</p>
                </div>
                <div class="flex justify-center ">
                    <button data-close-modal class="mx-5 btn btn-secundary">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </div>
            </form>
        </dialog>
    </div>
    <div class="flex justify-between px-10">
    <p class="mb-2 text-5xl font-medium leading-tight px-2">Talleres</p>
    </div>
    <section class="px-10 pb-10 flex-shrink-0 overflow-x-auto">
        <table class="w-fmd:min-w-full divide-y divide-gray-200 overflow-x-auto">
        <thead class="bg-gray-50">
            <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ruta de aprendisaje</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descripcion</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($miscursos as $data):?>
            <tr class="border-b hover:bg-orange-100 bg-gray-100">
            <td class="py-4 px-6 border-b border-gray-200"><?=$data["curso_id"]?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?=$data["carrera_nombre"]?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?=$data["curso_nombre"]?></td>
            <td class="py-4 px-6 border-b border-gray-200"><?=$data["curso_descripcion"]?></td>
            <td class="py-4 px-6 border-b border-gray-200 <?=$data["curso_status"] == true ? 'text-green-600' : 'text-red-600'?>"><?=$data["curso_status"] == true ? 'Activo' : 'Inactivo'?></td>
            <td class="flex space-x-2 py-6 px-6 border-b border-gray-200">
                <a href="<?=base_url?>Participante/all?id=<?=$data["curso_id"]?>" class="btn btn-primary"><i class="fa-solid fa-users"></i></a>
                <a class="btn <?= $data["curso_status"] == true ? 'bg-yellow-400 hover:bg-yellow-700' : 'bg-slate-400 hover:bg-slate-600'?> text-white" href="<?=base_url?>Curso/statusUpdate?id=<?=$data["curso_id"] . '&status=' . $data["curso_status"] ?>"><i class="fa-solid <?= $data["curso_status"] == true ? 'fa-eye-slash' : 'fa-eye'?>"></i></a>
                <a class="btn bg-red-600 hover:bg-red-700 text-white" href="<?=base_url?>Curso/delete?id=<?=$data["curso_id"]?>"><i class="fa-solid fa-trash"></i></a>
            </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </section>
    <?php elseif(isset($_SESSION['identidad']) && isset($_SESSION['user'])):?>
       <section class="px-10"> 
        <div class="bg-[#EAF3F0] border-2 mt-4 py-1 px-3 rounded-xl mb-5">
            <p>Nombre: <?=$_SESSION['identidad'][0]["usuario_nombre"]?></p>
            <p>Correo: <?=$_SESSION['identidad'][0]["usuario_correo"]?></p>
            <p>Area: <?=$_SESSION['identidad'][0]["usuario_area"]?></p>
        </d>
    </div>
        <section class="bg-[#EAF3F0] border-2 pt-0 mb-4 rounded-xl">
        <p class="text-center text-gray-600 font-bold text-2xl py-5">MIS INSIGNIAS</p>
        <div class="w-full mx-auto justify-items-center p-6 grid grid-cols-1 gap-4 md:grid-cols-3">
        <?php foreach($insignias as $data):?>
            <div class="flex flex-col">
                <img class="w-[40%] mx-auto mb-3 <?=$data["participante_terminado"] ?"":"grayscale"?>" src="<?=base_url."assets/img/images/".$data["curso_insignia"]?>" alt="">
                <p class="text-center"><?=$data["curso_nombre"]?></p>
            </div>
        <?php endforeach;?>
        </div>
        </section>
    <?php elseif(!isset($_SESSION['identidad'])):?>

    
    <section class="">
        <!-- Card Version -->
        <!-- <p class="text-center text-gray-900  font-bold text-2xl py-5">RUTAS DE APRENDIZAJE</p>
        
        

        <!-- New Home -->
        <!-- Hero -->
        <?php require_once dirname(__FILE__).'../../includes/home/Hero_v.php';?>
        <!-- About -->
        <?php require_once dirname(__FILE__).'../../includes/home/About_v.php';?>
        <!-- Routes Card -->
            <?php require_once dirname(__FILE__).'../../includes/home/Card_v.php';?>
        <!-- Testimonial -->
        <?php require_once dirname(__FILE__).'../../includes/home/Testimonial_v.php';?>
        <!-- Faq -->
        <?php require_once dirname(__FILE__).'../../includes/home/Faq_v.php';?>
        

    </section>

    <!-- Aqui es lo de las preguntas frecuentes -->
    <!-- <section>
        <h2>Preguntas frecuentes</h2>
        <?php foreach($faqs as $faq):?>
        <details>
        <summary>
            <h1><?=$faq["question"]?></h1>
        </summary>
        <p><?=$faq["answer"]?></p>
        </details>
        <?php endforeach;?>
    </section> -->
    <!-- Aqui termina lo de las preguntas frecuentes -->

    <?php endif;?>
</div>