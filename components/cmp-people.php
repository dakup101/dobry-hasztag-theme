<section class="bg-cover bg-center py-20 relative overflow-hidden"
         style="background-image: url('<?php echo IMG . "checked-bg.jpg" ?>')">
    <div class="absolute w-96 h-full top-10 -left-10 bg-contain bg-top bg-no-repeat animate-cut-to-right"
         style="background-image: url('<?php echo IMG . "kciuk_02.png" ?>')"></div>
    <h2 class="flex flex-col items-center font-sofia">
        <span class="block text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow">Dobrzy ludzie</span>
        <span class="block ml-52 text-2xl md:text-3xl 2xl:text-6xl text-shadow-dark text-rose">#dobryhasztag</span>
    </h2>


    <div class="px-5 mt-20"
         data-people>
        <div class="grid grid-cols-6 gap-8">
            <div></div>
            <?php for ($i=0; $i<5; $i++) {get_template_part( CMP, "people-skeleton" ); } ?>
        </div>
    </div>

</section>