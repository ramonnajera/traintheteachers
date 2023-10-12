<div class="bg-gray-100">
  <h1 class="text-3xl text-center font-medium pt-10 md:pt-0" >Rutas de aprendizaje</h1>
  <div class="mx-auto md:max-w-2xl px-4 py-4 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
    <div class="grid grid-cols-1 gap-x-1 md:gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
    <?php foreach ($carreras as $carrera):?>
      <a href="<?=htmlspecialchars(base_url . "Carrera/carrera?id=".$carrera["carrera_id"])?>" class="group flex justify-center items-end">
        <p class="absolute -z-1 flex justify-items-end pb-2">
          <span class="mt-1 text-sm font-medium text-pink-300 pl-36 md:pl-28">
            Ver más <span aria-hidden="true">&rarr;</span>
          </span>
        </p>
        <div class="aspect-h-1 w-80 md:w-full overflow-hidden bg-gray-100 xl:aspect-h-8 xl:aspect-w-7">
          <img src="<?=base_url?>assets/img/images/<?=$carrera["carrera_img"]?>" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
        </div>
        <!-- <h3 class="mt-4 text-md font-medium text-gray-700"><?=$carrera["carrera_nombre"]?></h3> -->
        <!-- <p class="mt-1 text-xs font-regular text-gray-900"><?=$carrera["carrera_descripcion"]?></p> -->
      </a>
    <?php endforeach;?>
    </div>
  </div>
</div>

<!-- <?php var_dump($carrera);?> -->