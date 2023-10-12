<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<!-- Route detail -->

<div class="bg-white">
  <section aria-labelledby="features-heading" class="relative">
    <div class="aspect-h-2 aspect-w-3 overflow-hidden sm:aspect-w-5 px-10 pt-7 md:py-0 md:pt-32 md:px-20 lg:aspect-none lg:absolute lg:h-full lg:w-1/1 lg:pr-4 xl:pr-16">
      <img src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_img"]?>" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>

    <div class="mx-auto max-w-2xl px-4 pb-2 pt-16 sm:px-6 sm:pb-32 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:pt-32">
      <div class="lg:col-start-2">
        <h2 id="features-heading" class="font-medium text-gray-500">Ruta de aprendizaje</h2>
        <p class="mt-4 text-4xl font-bold tracking-tight text-gray-900"><?=$carrera[0]["carrera_nombre"]?></p>
        <p class="mt-4 text-gray-500"><?=$carrera[0]["carrera_descripcion"]?></p>

        <dl class="mt-10 grid grid-cols-1 gap-x-8 gap-y-10 text-sm sm:grid-cols-2">
          <div>
            <dt class="font-medium text-gray-900">Ruta</dt>
            <dd class="mt-2 text-gray-500">Las rutas, se componen de talleres individuales, cada taller está pensado para otorgar al docente, el conocimiento necesario para dominar de manera básica dicha ruta.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Talleres</dt>
            <dd class="mt-2 text-gray-500">Cada taller, tiene su duración y juntos consiguen reunir las 20 hrs necesarias para cumplir con los estatutos del CUDD.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Insignias</dt>
            <dd class="mt-2 text-gray-500">Cada taller terminado, otorga una insignia, al reunir todas las insignias de una ruta de aprendizaje, te haces acreedor a la insignia global de la ruta. Esta insignia te acredita con las 20 hrs que pide el CUDD.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Práctica</dt>
            <dd class="mt-2 text-gray-500">Todos los talleres, están pensados para que el docente, termine conociendo y pudiendo utilizar las herramientas enseñadas en dichos talleres.</dd>
          </div>
        </dl>
      </div>
    </div>
  </section>
</div>

<!-- Workshop list -->
<?php require_once dirname(__FILE__).'../../includes/routes/Talleres_v.php';?>
