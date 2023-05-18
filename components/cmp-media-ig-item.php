<article data-fetched-ig-item>
    <div class="neo-before before:translate-x-2 before:translate-y-2 before:rounded-3xl mr-2 mb-2">
        <div class="fetched-media">
            <figure class="absolute top-0 left-0 w-full h-full">
                <img src="<?php the_field("preview") ?>"
                     alt="<?php echo get_the_title() ?>">
            </figure>
            <button data-fetched-play="<?php the_field("id") ?>"
                    data-fetched-play-src="ig">
                <?php echo file_get_contents(IMG . "search.svg") ?>
            </button>
            <div class="flex justify-between items-center relative">
                <div class="flex items-center">
                    <figure class="aspect-ration w-10 h-10 overflow-hidden rounded-full border border-dark mr-3">
                        <img src="<?php echo IMG . "dobry_pfp.png" ?>"
                             alt="Dobry Hasztag"
                             class="w-full h-full object-cover object-center">
                    </figure>
                    <div>
                        <a href="<?php the_field("channel_link") ?>"
                           target="_blank"
                           class="block w-full font-bold text-white underline text-sm"
                           data-fetched-user-url>
                            <span data-fetched-user>
                                <?php the_field("channel_title") ?>
                            </span>
                        </a>
                        <span data-fetched-date
                              class="text-white font-light text-sm">
                            <?php the_field("data_publikacji") ?>
                        </span>
                    </div>
                </div>
                <figure class="w-5 h-5 text-white"
                        data-fetched-icon>
                    <?php echo file_get_contents(IMG . "ig.svg") ?>
                </figure>
            </div>
        </div>
    </div>
</article>