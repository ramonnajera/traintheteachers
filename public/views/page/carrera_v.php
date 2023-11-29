<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<div class="bg-white pb-20 md:pb-12 mb-32 md:mb-0">
  <div aria-hidden="true" class="relative">
    <img src="/assets/img/route-bg.png" alt="" class="h-96 w-full object-cover object-center">
    <div class="absolute  "></div>
  </div>

  <div class="relative mx-auto -mt-72 md:-mt-60 max-w-7xl px-4 md:pb-16 sm:px-6 sm:pb-32 lg:px-8">
    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
      <p class="text-gray-300">Ruta de aprendizaje</p>
      <h2 class="text-3xl font-bold tracking-tight text-gray-100 sm:text-4xl"><?=$carrera[0]["carrera_nombre"]?></h2>
    </div>
    
  </div>
</div>


<!-- Workshop list -->
<?php require_once dirname(__FILE__).'../../includes/routes/Talleres_v.php';?>


