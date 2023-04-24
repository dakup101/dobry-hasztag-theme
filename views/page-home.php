<?php /* Template Name: Strona Główna */ 
get_header() ?>
<section class="container mx-auto px-40 pt-48 bg-yellow-light rounded-t-3xl">
    <?php get_template_part( CMP, "hero" ) ?>
</section>
<section class="container mx-auto px-40 pt-20 bg-yellow-light">
    <div class="grid grid-cols-12">
        <div class="col-span-9">
            <?php $about = get_field("about"); ?>
            <div class="neo-before">
                <div class="relative bg-white px-10 py-6 border-4 rounded-2xl">
                    <h2 class=" text-4xl font-gambado mb-5">
                        <?php echo $about["title"]; ?>
                    </h2>
                    <div class=" text-xl leading-normal mb-10">
                        <?php echo wpautop($about["content"]) ?>
                    </div>
                    <?php get_template_part( CMP, "btn", array(
                        'content' => $about["btn_text"],
                        'url' => $about["btn_url"],
                    )) ?>

                    <!-- Pin -->
                    <figure class="w-44 h-44 absolute -bottom-5 right-0 translate-x-1/2 translate-y-1/2">
                        <img src="<?php echo $about["pin"] ?>"
                             alt="<?php echo $about["title"] ?>"
                             class="object-contain w-full h-full animate-spin-slow ">
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-span-3 relative">
            <div class="absolute left-0 top-0 w-full">
                <div
                     class="text-stroke-dark flex flex-col font-black text-7xl text-yellow-light rotate-90 origin-top-left translate-x-full break-keep">
                    <span class="block mb-5">Wspierają&nbsp;nas</span>
                    <figure class="w-64">
                        <img src="<?php echo IMG . "arrow_group.png" ?>"
                             alt=""
                             class="w-full h-auto">
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-span-12 py-16">
            <h2 class="text-7xl font-sofia leading-none">
                <span class="text-shadow">Śledź naszą akcję</span>
                <span class="pl-44 flex justify-end flex-row-reverse items-start">
                    <span class="text-shadow leading-none">na bieżąco</span>
                    <img src="<?php echo IMG . "swing_arrow.png" ?>"
                         alt="Strzałka"
                         class="mt-5 mr-5 w-28">
                </span>
            </h2>
        </div>
    </div>
</section>
<?php get_footer() ?>