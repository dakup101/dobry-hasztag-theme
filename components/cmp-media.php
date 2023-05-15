<div class="flex items-center mb-10">
    <button data-media-switcher="youtube_post"
            class="flex items-center mr-5">
        <figure class="w-5 h-5 mr-3">
            <?php echo file_get_contents(IMG . "yt.svg") ?>
        </figure>
        <span>
            YouTube
        </span>
    </button>
    <button data-media-switcher="instagram_post"
            class="flex items-center">
        <figure class="w-5 h-5 mr-3">
            <?php echo file_get_contents(IMG . "ig.svg") ?>
        </figure>
        <span>
            Instagram
        </span>
    </button>
</div>

<div data-fetched-media-wrapper
     class=" overflow-y-auto pr-5">
    <div data-fetched-skeleton
         class="grid grid-cols-3 gap-6 animate__animated animate__fadeIn">
        <?php for ($i=0; $i < 6; $i++) get_template_part(CMP, "media-skeleton") ?>
    </div>
    <div data-fetched-media
         class="animate__animated animate__fadeIn">

    </div>
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