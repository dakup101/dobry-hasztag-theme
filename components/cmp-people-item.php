<div class="neo-before w-full mb-1.5 mr-1.5 hover:-translate-y-5 transition-all">
    <div class="relative bg-white rounded-xl overflow-hidden border-4 border-dark">
        <figure class="h-52 md:h-64 2xl:h-96 border-b-4 border-dark">
            <img src="<?php echo get_the_post_thumbnail_url() ?>"
                 alt="<?php echo get_the_title(); ?>"
                 class="object-cover w-full h-full">
        </figure>
        <div class="px-10 py-5">
            <h3 class="font-archio text-2xl font-bold text-center"><?php echo get_the_title() ?></h3>
            <span class="font-archio text-2xl font-bold text-center block w-full">
                <?php echo get_field("nickname") ?>
            </span>
            <a href="<?php echo get_field("tt_link") ?>"
			   target="_blank"
               class="flex items-center justify-center mx-auto mt-5 hover:cursor-pointer hover:text-rose">
                <span class="font-sofia">
                    Zobacz filmik<br>
                    O naszej akcji
                </span>
                <img src="<?php echo IMG . "play_alt.svg" ?>"
                     alt="Filmik"
                     class="w-10 h-10 shrink-0 ml-5">
            </a>
        </div>
    </div>
</div>