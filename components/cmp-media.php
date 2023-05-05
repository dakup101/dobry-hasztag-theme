<div data-fetched-media-wrapper
     class=" overflow-y-auto pr-5">
    <div data-fetched-skeleton
         class="grid grid-cols-3 gap-6">
        <?php for ($i=0; $i < 6; $i++) get_template_part(CMP, "media-skeleton") ?>
    </div>
    <div data-fetched-media>

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