<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<!-- Route detail -->

<div class="bg-white">
  <section aria-labelledby="features-heading" class="relative">
    <div class="aspect-h-2 aspect-w-3 overflow-hidden sm:aspect-w-5 px-10 py-10 md:pt-32 md:px-32 lg:aspect-none lg:absolute lg:h-full lg:w-1/1 lg:pr-4 xl:pr-16">
      <img src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_img"]?>" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>

    <div class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 sm:pb-32 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:pt-32">
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

<div class="flex flex-col px-10 w-ful justify-end container">
  <ul role="list" class="flex flex-col md:justify-center px-3 md:px-96 divide-y divide-gray-100">
    <li class="flex justify-between  gap-x-6 py-5">
      <div class="flex min-w-0 gap-x-4">
        <img class="h-12 w-12 flex-none bg-gray-50" src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_insignia"]?>" alt="">
        <div class="min-w-0 flex-auto">
          <p class="text-sm font-semibold leading-6 text-gray-900">Leslie Alexander</p>
          <p class="mt-1 truncate text-xs leading-5 text-gray-500">leslie.alexander@example.com</p>
        </div>
      </div>
      <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time></p>
      </div>
    </li>  
  </ul>
</div>


<?php
    var_dump($carrera);
    echo "<br>";
    echo "<br>";
    var_dump($cursos);
?>
