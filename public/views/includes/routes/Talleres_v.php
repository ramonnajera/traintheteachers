<!-- Workshop list -->
<div class="mx-auto py-20 w-full">
  <h1 class="text-start px-32 mt-5 text-4xl font-medium tracking-tight text-gray-900">Talleres</h1>
  <?php foreach ($cursos as $curso) : ?>
    <div class="flex flex-col px-10 md:pb-10 md:px-10 lg:px-20 h-full w-full">
      <details class="ver">
        <summary class="ver">
          <ul role="list" class="grid grid-cols-1 md:justify-center px-3 md:px-auto">
            <li class="flex justify-between py-5">
              <div class="flex w-full gap-x-4 md:flex-grow">
                <img class="h-24 w-20  md:h-22 md:w-20 flex-none bg-gray-50" src="<?= base_url ?>assets/img/images/<?= $curso["curso_insignia"] ?>" alt="">
                <div class="w-full flex-auto">
                  <p class="text-sm md:text-xl font-medium leading-1 mt-4 text-gray-900"><?= $curso["curso_nombre"] ?></p>
                  <dd class="inline-flex items-center rounded-md  px-2 py-1 mt-2 text-xs font-medium ring-1 ring-inset <?= $curso["curso_status"] == 't' ? 'bg-green-50 text-green-700 ring-green-600/20' : 'bg-red-50 text-red-700 ring-red-600/20' ?>"><?= $curso["curso_status"] == "t" ? "Disponible" : "No disponible" ?></dd>

                  <?php if (isset($_SESSION['identidad']) && in_array($curso["curso_id"], $cursos_inscrito)) : ?>
                    <dd class="inline-flex items-center rounded-md  px-2 py-1 mt-2 text-xs font-medium ring-1 ring-inset bg-green-50 text-green-700 ring-green-600/20"><i class="fa-solid fa-circle-check mr-1"></i> Estás inscrito en este taller</dd>
                  <?php endif ?>

                </div>
              </div>
              <!-- <div class="hidden md:block text-presencial pt-4 text-right md:text-right md:ml-[490px] md:mr-10">
                <p class="text-sm leading-6 text-gray-900">Presencial</p>
                <p class="mt-1 text-xs leading-5 text-gray-500">duración: <time datetime="2023-01-23T13:23Z">3h</time></p>
              </div> -->
            </li>
          </ul>
        </summary>
        <div>
          <div class="lg:col-start-3 lg:row-end-1">
            <h2 class="sr-only">Summary</h2>
            <div class="rounded-lg bg-gray-50 shadow-sm ring-1 ring-gray-900/5">
              <dl class="flex flex-wrap">
                <div class="flex-auto pl-6 pt-6">
                  <dd class="mt-1 text-base font-semibold leading-6 text-gray-900">Información del taller:</dd>
                </div>
                <div class="flex-none self-end px-6 pt-4">
                  <dt class="sr-only">Status</dt>
                  <!-- <dd class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Disponible</dd> -->
                </div>
                <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                  <dt class="flex-none">
                    <span class="sr-only">Status</span>
                    <svg class="h-6 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                    </svg>
                  </dt>
                  <dd class="text-sm leading-6 text-gray-500"><?= $curso["curso_descripcion"] ?></dd>
                </div>
                <?php if ($curso["curso_status"] == "t") : ?>
                  <div class="mt-6 flex w-full flex-none gap-x-4 border-t border-gray-900/5 px-6 pt-6">
                    <dt class="flex-none">
                      <span class="sr-only">Workshop</span>
                      <svg class="h-6 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z" clip-rule="evenodd" />
                      </svg>
                    </dt>
                    <dd class="text-sm font-medium leading-6 text-gray-900">Instructor: <?= $curso["usuario_nombre"] ?></dd>
                  </div>





                  <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                    <dt class="flex-none">
                      <span class="sr-only">Horario</span>
                      <svg class="h-6 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </dt>
                    <dd class="text-sm leading-6 text-gray-500">
                      <p><?= $curso["curso_horario"] ?></p>
                    </dd>
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
                      <time datetime="2023-01-31"><?= $curso["curso_fecha"] ?></time>
                    </dd>
                  </div>
                  <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                    <dt class="flex-none">
                      <span class="sr-only">Mode</span>
                      <svg class="h-6 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                      </svg>
                    </dt>
                    <dd class="text-sm leading-6 text-gray-500">
                      <p><?= $curso["curso_modo"] ?></p>
                    </dd>
                  </div>
                <?php endif; ?>
                <div class="mt-4 flex w-full flex-none gap-x-4 px-6">
                  <dt class="flex-none">
                    <span class="sr-only">Mode</span>
                    <svg class="h-6 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </dt>
                  <dd class="text-sm leading-6 text-gray-500">
                    <p><?= $curso["curso_duracion"] ?> <?= $curso["curso_duracion"] == 1 ? "hora" : "horas" ?></p>
                  </dd>
                </div>

              </dl>
              <div class="mt-6 border-t border-gray-900/5 px-6 py-6">

                <?php if (isset($_SESSION['identidad'])) : ?>
                  <?php if ($curso["curso_status"] && !in_array($curso["curso_id"], $cursos_inscrito)) : ?>
                    <a href="<?= base_url ?>Participante/add?id=<?= $curso["curso_id"] ?>" class="rounded-sm bg-primary px-3.5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Inscribirme</a>
                  <?php else : ?>
                    <button class="rounded-sm bg-primary px-3.5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:opacity-50" disabled>Inscribirme</button>
                  <?php endif; ?>
                <?php elseif (!isset($_SESSION['identidad'])) : ?>
                  <!-- <a href="<?= htmlspecialchars(base_url . "Page/registro") ?>" class="rounded-sm bg-primary px-3.5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary">Registrarme</a> -->
                  <?php if ($curso["curso_status"]) : ?>
                    <a href="<?= htmlspecialchars(base_url . "Page/registro?id=" . $curso["curso_id"]) ?>" class="btn btn-primary mx-3">Inscríbete</a>
                  <?php else : ?>
                    <button class="rounded-sm bg-primary px-3.5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:opacity-50" disabled>Inscríbete</button>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </details>
    </div>
  <?php endforeach; ?>
</div>