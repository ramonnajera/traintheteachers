<div class="bg-gray-100" id="routes">
  <h1 class="text-3xl text-center font-medium pt-10 md:pt-0">Rutas de aprendizaje</h1>
  <div class="mx-auto md:max-w-3xl px-4 py-4 sm:px-6 sm:py-8 lg:max-w-7xl lg:px-8">
    <div class="grid grid-cols md:grid md:grid-cols-2 gap-x-1 md:gap-x-6 gap-y-10 lg:flex lg:flex-row">
      <?php foreach ($carreras as $carrera) : ?>
        <a href="<?= htmlspecialchars(base_url . "Carrera/carrera?id=" . $carrera["carrera_id"]) ?>" class="group flex justify-center items-end">
          <div class="aspect-h-1 z-20 w-80 md:w-full overflow-hidden bg-gray-100 xl:aspect-h-8 xl:aspect-w-7">
            <img src="<?= base_url ?>assets/img/images/<?= $carrera["carrera_img"] ?>" alt="" class="h-full w-full object-cover object-center group-hover:opacity-75">
          </div>
          <p class="flex absolute z-10 text-pink-300 text-3xl md:text-xl  pb-2">
            Ver talleres <span>&rarr;</span>
          </p>
          <!-- <h3 class="mt-4 text-md font-medium text-gray-700"><?= $carrera["carrera_nombre"] ?></h3> -->
          <!-- <p class="mt-1 text-xs font-regular text-gray-900"><?= $carrera["carrera_descripcion"] ?></p> -->
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>