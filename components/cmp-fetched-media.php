<div class="grid grid-cols-3 gap-10"
     data-fetched-media
     data-fetched-source="yt">
    <template data-fetched-template>
        <div class="neo-before">
            <div class="fetched-media">
                <figure class="absolute top-0 left-0 w-full h-full">
                    <img src="https://t1.gstatic.com/licensed-image?q=tbn:ANd9GcRRv9ICxXjK-LVFv-lKRId6gB45BFoNCLsZ4dk7bZpYGblPLPG-9aYss0Z0wt2PmWDb"
                         alt=""
                         data-fetched-img>
                </figure>
                <button data-fetched-play=""
                        data-fetched-play-src="">
                    <?php echo file_get_contents(IMG . "play.svg") ?>
                </button>
                <div class="flex justify-between items-center relative">
                    <div class="flex items-center">
                        <figure class="aspect-ration w-14 h-14 overflow-hidden rounded-full border border-dark mr-3">
                            <img data-fetched-pfp
                                 src="<?php echo IMG . "dobry_pfp.png" ?>"
                                 alt="Dobry Hasztag"
                                 class="w-full h-full object-cover object-center">
                        </figure>
                        <div>
                            <a href="#"
                               target="_blank"
                               class="block w-full font-bold text-white underline"
                               data-fetched-user-url>
                                <span data-fetched-user>
                                    #dobryhasztag
                                </span>
                            </a>
                            <span data-fetched-date
                                  class="text-white">
                                10 dni temu
                            </span>
                        </div>
                    </div>
                    <figure class="w-8 h-8 text-white"
                            data-fetched-icon>
                        <?php echo file_get_contents(IMG . "yt.svg") ?>
                    </figure>
                </div>
            </div>
        </div>
    </template>
</div>

<dialog data-modal
        data-yt-modal
        class="max-w-7xl w-full p-0 backdrop:bg-dark backdrop:bg-opacity-80 rounded-2xl border-4">
    <div class="px-4 py-2 font-sofia text-xl font-bold">
        #DobryHasztag
    </div>
    <iframe src=""
            class="w-full h-auto aspect-video">

    </iframe>
</dialog>