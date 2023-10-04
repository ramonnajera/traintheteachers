<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<!-- Route detail -->

<div class="bg-white">
  <section aria-labelledby="features-heading" class="relative">
    <div class="aspect-h-2 aspect-w-3 overflow-hidden sm:aspect-w-5 px-10 py-10 md:pt-32 md:px-2 lg:aspect-none lg:absolute lg:h-full lg:w-1/1 lg:pr-4 xl:pr-16">
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
<?php foreach($cursos as $curso):?>
    <div class="flex flex-col px-4 md:px-10 w-full justify-end container">
      <details class="ver">
      <summary class="ver">
        <ul role="list" class="flex flex-col md:justify-center px-3 md:px-auto divide-y divide-gray-100">
          <li class="flex justify-between  gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <img class="h-20 w-20 flex-none bg-gray-50" src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_insignia"]?>" alt="">
              <div class="min-w-0  flex-auto">
                <p class="text-sm md:text-2xl font-semibold mt-4 leading-6 text-gray-900"><?=$curso["curso_nombre"]?></p>
                <p class="mt-1 truncate text-md leading-5 text-gray-500">agalaga</p>
              </div>
            </div>
            <div class="flex flex-col justify-center pl-80">
              <p class="text-sm leading-6 text-gray-900">Presencial</p>
              <p class="mt-1 text-xs leading-5 text-gray-500">duración: <time datetime="2023-01-23T13:23Z">3h</time></p>
            </div>
          </li>  
        </ul>
      </summary>
      <div>
      <div class="lg:col-start-3 lg:row-end-1">
  <h2 class="sr-only">Summary</h2>
  <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5">
    <dl class="flex flex-wrap">
      <div class="flex-auto pl-6 pt-6">
        <dd class="mt-1 text-base font-semibold leading-6 text-gray-900">Detalles:</dd>
      </div>
      <div class="flex-none self-end px-6 pt-4">
        <dt class="sr-only">Status</dt>
        <dd class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Disponible</dd>
      </div>
      <div class="mt-6 flex w-full flex-none gap-x-4 border-t border-gray-900/5 px-6 pt-6">
        <dt class="flex-none">
          <span class="sr-only">Client</span>
          <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
          </svg>
        </dt>
        <dd class="text-sm font-medium leading-6 text-gray-900">Kenia</dd>
      </div>
      <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
        <dt class="flex-none">
          <span class="sr-only">Due date</span>
          <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M5.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H6a.75.75 0 01-.75-.75V12zM6 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H6zM7.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H8a.75.75 0 01-.75-.75V12zM8 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H8zM9.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V10zM10 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H10zM9.25 14a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H10a.75.75 0 01-.75-.75V14zM12 9.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V10a.75.75 0 00-.75-.75H12zM11.25 12a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H12a.75.75 0 01-.75-.75V12zM12 13.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V14a.75.75 0 00-.75-.75H12zM13.25 10a.75.75 0 01.75-.75h.01a.75.75 0 01.75.75v.01a.75.75 0 01-.75.75H14a.75.75 0 01-.75-.75V10zM14 11.25a.75.75 0 00-.75.75v.01c0 .414.336.75.75.75h.01a.75.75 0 00.75-.75V12a.75.75 0 00-.75-.75H14z" />
            <path fill-rule="evenodd" d="M5.75 2a.75.75 0 01.75.75V4h7V2.75a.75.75 0 011.5 0V4h.25A2.75 2.75 0 0118 6.75v8.5A2.75 2.75 0 0115.25 18H4.75A2.75 2.75 0 012 15.25v-8.5A2.75 2.75 0 014.75 4H5V2.75A.75.75 0 015.75 2zm-1 5.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h10.5c.69 0 1.25-.56 1.25-1.25v-6.5c0-.69-.56-1.25-1.25-1.25H4.75z" clip-rule="evenodd" />
          </svg>
        </dt>
        <dd class="text-sm leading-6 text-gray-500">
          <time datetime="2023-01-31">January 31, 2023</time>
        </dd>
      </div>
      <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
        <dt class="flex-none">
          <span class="sr-only">Status</span>
          <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M2.5 4A1.5 1.5 0 001 5.5V6h18v-.5A1.5 1.5 0 0017.5 4h-15zM19 8.5H1v6A1.5 1.5 0 002.5 16h15a1.5 1.5 0 001.5-1.5v-6zM3 13.25a.75.75 0 01.75-.75h1.5a.75.75 0 010 1.5h-1.5a.75.75 0 01-.75-.75zm4.75-.75a.75.75 0 000 1.5h3.5a.75.75 0 000-1.5h-3.5z" clip-rule="evenodd" />
          </svg>
        </dt>
        <dd class="text-sm leading-6 text-gray-500"><?=$curso["curso_descripcion"]?></dd>
      </div>
    </dl>
    <div class="mt-6 border-t border-gray-900/5 px-6 py-6">
      <a href="#" class="rounded-sm bg-primary px-3.5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Inscribirme</a>
    </div>
  </div>
</div>

      </div>
      </details>
      </div>
    </div>
<?php endforeach;?>


<!-- <?php
    var_dump($carrera);
    echo "<br>";
    echo "<br>";
    var_dump($cursos);
?> -->
