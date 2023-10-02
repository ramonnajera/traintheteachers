<div class="bg-white">
  <div class="mx-auto max-w-7xl px-6 pt-2 pb-10 sm:py-32 lg:px-8 lg:py-1 lg:pb-16">
    <div class="mx-auto max-w-4xl divide-y divide-gray-900/10">
      <h2 class="text-2xl font-bold leading-10 tracking-tight text-gray-900">Preguntas frecuentes</h2>
      <?php foreach($faqs as $faq):?>
      <dl class="mt-10 space-y-6 divide-y divide-gray-900/10">
        <div class="pt-6">
          <dt>
            <details type="button" class="flex w-full items-start justify-between text-left text-gray-900" aria-controls="faq-0" aria-expanded="false">
                <summary>
                    <span class="font-medium text-gray-900"><?=$faq["question"]?></span>
                </summary>
                <p class="text-softgray"><?=$faq["answer"]?></p>
            </details>
          </dt>
        </div>
      </dl>
      <?php endforeach;?>
    </div>
  </div>
</div>
