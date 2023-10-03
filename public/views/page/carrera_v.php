<!-- datos -->
<?php require_once dirname(__FILE__).'../../includes/routes/Detail_v.php';?>

<div class="bg-white">
  <section aria-labelledby="features-heading" class="relative">
    <div class="aspect-h-2 aspect-w-3 overflow-hidden sm:aspect-w-5 px-10 py-10 md:pt-32 md:px-32 lg:aspect-none lg:absolute lg:h-full lg:w-1/2 lg:pr-4 xl:pr-16">
      <img src="<?=base_url?>assets/img/images/<?=$carrera[0]["carrera_img"]?>" alt="" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>

    <div class="mx-auto max-w-2xl px-4 pb-24 pt-16 sm:px-6 sm:pb-32 lg:grid lg:max-w-7xl lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:pt-32">
      <div class="lg:col-start-2">
        <h2 id="features-heading" class="font-medium text-gray-500">Agalaga laga agalaga agalaga</h2>
        <p class="mt-4 text-4xl font-bold tracking-tight text-gray-900"><?=$carrera[0]["carrera_nombre"]?></p>
        <p class="mt-4 text-gray-500">agalagalagalagalagalagalagalaga agalaga agalaga aga laga laga aga laga agalaga laga agalagalagalagal agalaga.</p>

        <dl class="mt-10 grid grid-cols-1 gap-x-8 gap-y-10 text-sm sm:grid-cols-2">
          <div>
            <dt class="font-medium text-gray-900">Agalaga</dt>
            <dd class="mt-2 text-gray-500">agalagalagalagalagalagalagalaga agalaga agalaga aga laga laga aga laga agalaga laga agalagalagalagal agalaga.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Agalaga</dt>
            <dd class="mt-2 text-gray-500">agalagalagalagalagalagalagalaga agalaga agalaga aga laga laga aga laga agalaga laga agalagalagalagal agalaga.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Agalaga</dt>
            <dd class="mt-2 text-gray-500">agalagalagalagalagalagalagalaga agalaga agalaga aga laga laga aga laga agalaga laga agalagalagalagal agalaga.</dd>
          </div>
          <div>
            <dt class="font-medium text-gray-900">Agalaga</dt>
            <dd class="mt-2 text-gray-500">agalagalagalagalagalagalagalaga agalaga agalaga aga laga laga aga laga agalaga laga agalagalagalagal agalaga.</dd>
          </div>
        </dl>
      </div>
    </div>
  </section>
</div>

<?php
    var_dump($carrera);
    echo "<br>";
    echo "<br>";
    var_dump($cursos);
?>
