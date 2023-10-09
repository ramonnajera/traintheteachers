<section class="bg-[#EAF3F0]">
    <p class="text-center text-gray-600 font-[Faktum] text-2xl py-5">LISTA DE CURSOS</p>
    <div class="w-full mx-auto justify-items-center p-6 grid grid-cols-1 gap-4 md:grid-cols-4">
        <?php foreach($cursos as $curso):?>
            <!-- Routes Card -->
            <?php require_once dirname(__FILE__).'../../includes/home/Card_v.php';?>
        <?php endforeach;?>
    </div>
</section>