<section class="bg-cover bg-center py-20 relative overflow-hidden"
         style="background-image: url('<?php echo IMG . "checked-bg.jpg" ?>')">
    <div class="absolute w-96 h-full top-10 -left-10 bg-contain bg-top bg-no-repeat animate-cut-to-right"
         style="background-image: url('<?php echo IMG . "kciuk_02.png" ?>')"></div>
    <h2 class="flex flex-col items-center font-sofia relative z-20">
        <span class="block text-5xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl text-shadow">Dobrzy ludzie</span>
        <span
              class="block ml-20 sm:ml-32 md:ml-52 text-3xl md:text-3xl 2xl:text-6xl text-shadow-dark text-rose">#dobryhasztag</span>
    </h2>


    <div class="px-5 mt-20"
         data-people>
        <div class="grid grid-cols-6 gap-8">
            <div class="hidden md:block lg:hidden xl:block col-span-2 xl:col-span-1"></div>
            <?php for ($i=0; $i<5; $i++) : ?>
            <?php 
            $visibility = "" ;
            if ($i>=3) $visibility = "hidden xl:block";
            else if ($i>=2) $visibility = "hidden lg:block";
            else if ($i>=1) $visibility = "hidden sm:block";
            else $visibility = "block"
            ?>
            <div
                 class="<?php echo $visibility ?> col-span-6 sm:col-span-3 md:col-span-2 xl:col-span-1 neo-before w-full mb-1.5 mr-1.5 hover:-translate-y-5 transition-all before:bg-gray animate-pulse">

                <?php get_template_part( CMP, "people-skeleton" ); ?>
            </div>
            <?php endfor; ?>
        </div>
    </div>

</section>