<div class="grid grid-cols-12">
    <div class="col-span-12 md:col-span-9">
        <?php $about = get_field("about"); ?>
        <div class="neo-before mb-1.5 mr-1.5">
            <div class="relative h-full bg-white px-5 md:px-10 py-6 border-4 rounded-2xl">
                <h2 class="text-2xl md:text-4xl font-gambado mb-5">
                    <?php echo $about["title"]; ?>
                </h2>
                <div class=" md:text-xl leading-normal mb-10">
                    <?php echo wpautop($about["content"]) ?>
                </div>
                <?php get_template_part( CMP, "btn", array(
                        'content' => $about["btn_text"],
                        'url' => $about["btn_url"],
                )) ?>
                <!-- Pin -->
                <figure
                        class="hidden md:block w-32 h-32 md:w-44 md:h-44 absolute -bottom-5 -right-10 md:right-0 translate-x-1/2 translate-y-1/2">
                    <img src="<?php echo $about["pin"] ?>"
                         alt="<?php echo $about["title"] ?>"
                         class="object-contain w-full h-full animate-spin-slow ">
                </figure>
            </div>
        </div>
    </div>
    <div class="hidden md:block col-span-3 relative">
        <div class="absolute left-0 top-0 w-full">
            <div
                 class="text-stroke-dark flex flex-col font-black text-4xl md:text-6xl xl:text-7xl text-yellow-light rotate-90 origin-top-left translate-x-full break-keep">
                <span class="block mb-5">Wspierają&nbsp;nas</span>
                <figure class="w-44 md:w-64">
                    <img src="<?php echo IMG . "arrow_group.png" ?>"
                         alt=""
                         class="w-full h-auto">
                </figure>
            </div>
        </div>
    </div>
    <div class="col-span-12 pt-10">
        <h2 class="text-4xl sm:text-5xl md:text-6xl xl:text-7xl font-sofia leading-none">
            <span class="text-shadow">Śledź naszą akcję</span>
            <span class="md:pl-44 flex justify-end flex-row-reverse items-start">
                <span class="text-shadow leading-none">na bieżąco</span>
                <img src="<?php echo IMG . "swing_arrow.png" ?>"
                     alt="Strzałka"
                     class="mt-5 mr-5 w-16 md:w-28 animate-cut-to-left">
            </span>
        </h2>
    </div>
</div>