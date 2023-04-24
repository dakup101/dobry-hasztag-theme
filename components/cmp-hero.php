<div class="grid grid-cols-12 items-center">
    <div class="col-12 md:col-span-6">
        <h1 class=" text-hero font-black leading-tight">
            <span class="text-shadow">Dołącz do<br>naszej akcji</span>
            <br>
            <span class="text-stroke text-yellow-light">#dobryhasztag</span>
        </h1>
    </div>
    <div class="col-12 md:col-span-6 pl-20">
        <?php $hero_vid = get_field("hero_vid") ?>
        <div class="relative neo-before">
            <div class="border-4 border-dark rounded-2xl overflow-hidden bg-yellow relative">
                <div class="border-b-4 px-4 py-2 font-sofia text-xl font-bold">
                    <span>
                        <?php echo $hero_vid["title"] ?>
                    </span>
                </div>
                <figure class=" py-48 relative">
                    <img src="<?php echo $hero_vid["preview"] ?>"
                         alt="<?php echo $hero_vid["title"] ?>"
                         class="absolute top-0 left-0 object-cover w-full h-full">
                    <button class="hero-play">
                        <figure class=" w-1/6">
                            <?php echo file_get_contents(IMG . "play.svg") ?>
                        </figure>
                    </button>
                </figure>
            </div>
        </div>

    </div>
</div>