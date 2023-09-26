<!-- <div class="bg-white">
			<div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
				<h2 class="text-black text-5xl pb-10 text-center font-semibold">
					Productos
				</h2>

                

				<div class="bg-red-400 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 xl:gap-x-8">
						<a key="" href="https://google.com" class="group">
							<div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg xl:aspect-h-8 xl:aspect-w-7 relative">
								<img
									src="<?=base_url?>assets/img/images/<?=$carrera["carrera_img"]?>"
									alt="uniconr"
									class="h-full w-full object-cover object-center group-hover:opacity-75"
								/>
								<img
									src="<?=base_url?>assets/img/images/<?=$carrera["carrera_img"]?>"
									alt="agalaga"
									class="absolute w-44 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 group-hover:opacity-75"
								/>
							</div>
							<h3 class="mt-4 text-lg font-semibold text-gray-700">
                            <?=$carrera["carrera_id"]?>
                            </h3>
							<p class="mt-1 text-lg font-medium text-gray-900"></p>
						</a>	
				</div>
			</div>
		</div> -->

        <div class="bg-gray-100">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <div class="md:flex md:items-center md:justify-between">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Rutas de aprendizaje</h2>
      <a href="#" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
        Ver todas las rutas
        <span aria-hidden="true"> &rarr;</span>
      </a>
    </div>

    <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
      <div class="group relative">
        <div class="h-56 w-full overflow-hidden rounded-md bg-gray-100 group-hover:opacity-75 lg:h-72 xl:h-80">
          <img src="<?=base_url?>assets/img/images/<?=$carrera["carrera_img"]?>" alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
        </div>
        <h3 class="mt-4 text-sm text-gray-700">
          <a href="#">
            <span class="absolute inset-0"></span>
            <?=$carrera["carrera_nombre"]?>
          </a>
        </h3>
        <p class="mt-1 text-sm text-gray-500"><?=$carrera["carrera_descripcion"]?></p>
        <!-- <img src="<?=base_url?>assets/img/images/<?=$carrera["carrera_insignia"]?>" alt="Hand stitched, orange leather long wallet." class="h-10 w-10 mt-3 object-cover object-center"> -->
      </div>

      <!-- More products... -->
    </div>

    <div class="mt-8 text-sm md:hidden">
      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
        Shop the collection
        <span aria-hidden="true"> &rarr;</span>
      </a>
    </div>
  </div>
</div>


        <?php var_dump($carrera);?>