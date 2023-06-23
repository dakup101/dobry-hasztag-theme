<div class="grid grid-cols-5 bg-right bg-no-repeat bg-contain"
     style="background-image: url('<?php echo IMG . "about-bg.png" ?>')">
    <div class="col-span-5 lg:col-span-4 xl:col-span-3">
        <h2 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-sofia text-shadow-rose">
            <?php echo get_field("about_numbers_title") ?>
        </h2>
        <div class="text-2xl md:text-4xl font-gambado mt-5">
            <?php echo get_field("about_numbers_desc") ?>
        </div>
        <div class="mt-10 md:mt-20">
            <div class="grid grid-cols-6 gap-10">
                <?php foreach(get_field("about_numbers") as $number) : ?>
                <div class="col-span-6 sm:col-span-3 md:col-span-2 neo-before mb-1.5 mr-1.5">
                    <div
                         class="relative h-full bg-cyan-lighter px-5 pb-5 pt-10 md:pt-12 border-4 border-dark rounded-xl font-sofia  text-center">
                        <figure
                                class="absolute w-14 md:w-20 h-14 md:h-20 border-4 border-dark bg-rose rounded-full top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center justify-center">
                            <img src="<?php echo $number["icon"] ?>"
                                 alt=""
                                 class="w-7 md:w-10 h-7 md:h-10">
                        </figure>
                        <p class="text-3xl lg:text-4xl xl:text-4xl">
                            <?php echo $number["prefix"] ?>
                            <?php echo $number["number"] ?>
                            <?php echo $number["sufix"] ?>
                        </p>
                        <p class="text-xl"><?php echo $number["name"] ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>