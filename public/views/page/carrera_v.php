<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<!-- Route detail -->

<!-- <div class="bg-white">
  <section aria-labelledby="features-heading" class="relative">
    <div class="aspect-h-2 aspect-w-3 overflow-hidden sm:aspect-w-5 px-10 pt-7 md:py-0 md:pt-12 md:px-auto lg:aspect-none lg:absolute lg:h-1/1 lg:w-1/3 lg:pr-4 xl:pr-0 xl:pl-24">
      <img src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_img"]?>" alt="" class="h-full w-full mx- lg:h-full lg:w-full">
    </div>

    <div class="mx-auto max-w-2xl px-4 pb-2 pt-16 sm:px-6 sm:pb-32 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:pt-3 lg:pb-60">
      <div class="lg:col-start-2 pt-0 md:pt-12">
        <h2 id="features-heading" class="font-medium text-gray-500">Ruta de aprendizaje</h2>
        <p class="mt-4 text-4xl font-bold tracking-tight text-gray-900"><?=$carrera[0]["carrera_nombre"]?></p>
        <p class="mt-4 text-gray-500"><?=$carrera[0]["carrera_descripcion"]?></p>
      </div>
    </div>
  </section>
</div> -->

<div class="bg-white pb-20 md:pb-12">
  <div aria-hidden="true" class="relative">
    <img src="/assets/img/route-bg.png" alt="" class="h-96 w-full object-cover object-center">
    <div class="absolute  "></div>
  </div>

  <div class="relative mx-auto -mt-72 md:-mt-60 max-w-7xl px-4 md:pb-16 sm:px-6 sm:pb-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
      <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl"><?=$carrera[0]["carrera_nombre"]?></h2>
      <p class="mt-4 text-gray-50"><?=$carrera[0]["carrera_descripcion"]?></p>
    </div>

    
  </div>
</div>


<!-- Workshop list -->
<?php require_once dirname(__FILE__).'../../includes/routes/Talleres_v.php';?>


