<section>
    <div class=" border-t-8 border-b-8 py-10 bg-white relative overflow-hidden">
        <div class="container mx-auto relative z-20">
            <div class="flex justify-center items-center">
                <h2 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-sans  font-black text-shadow">
                    Udostępnij<br>nasz projekt
                </h2>
                <figure class="hidden lg:block">
                    <img src="<?php echo IMG . "share.svg" ?>"
                         alt="Udostępnij #dobryhasztag"
                         class="h-44 ml-10 shrink-0">
                </figure>
            </div>
        </div>
        <figure class="absolute -left-10 sm:left-0 lg:left-10 -bottom-10 lg:-bottom-16 h-2/3">
            <img src="<?php echo IMG . "kciuk_bg_09.png" ?>"
                 alt="Udostępnij #dobryhasztag"
                 class="h-full w-auto">
        </figure>
        <figure class="absolute left-0 sm:left-10 lg:left-20 -bottom-10 lg:-bottom-16 h-full  animate-cut-to-left">
            <img src="<?php echo IMG . "kciu-sam_06.png" ?>"
                 alt="Udostępnij #dobryhasztag"
                 class="h-full w-auto ">
        </figure>

        <figure
                class="absolute -right-64 sm:-right-52 lg:-right-32 xl:-right-10 -bottom-10 lg:-bottom-20 h-full animate-cut-to-right">
            <img src="<?php echo IMG . "prawa-reka_09.png" ?>"
                 alt="Udostępnij #dobryhasztag"
                 class="h-full w-auto">
        </figure>
    </div>

    <div class="grid grid-cols-5">
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://dobryhasztag.pl"
           target="_blank"
           class="col-span-5 sm:col-span-1 flex items-center justify-center p-5 sm:p-10 bg-fb hover:bg-yellow cursor-pointer transition-all">
            <img src="<?php echo IMG . "share/facebook.svg" ?>"
                 alt="Udostępnij na FB"
                 class="w-10 sm:w-16 h-10 sm:h-16 el-drop-shadow">
        </a>
        <a href="https://api.whatsapp.com/send?text=https://dobryhasztag.pl"
           class="col-span-5 sm:col-span-1 flex items-center justify-center p-5 sm:p-10 bg-wa hover:bg-yellow cursor-pointer transition-all">
            <img src="<?php echo IMG . "share/whatsapp.svg" ?>"
                 alt="Udostępnij na FB"
                 class="w-10 sm:w-16 h-10 sm:h-16 el-drop-shadow">
        </a>
        <a href="https://twitter.com/intent/tweet?url=https://dobryhasztag.pl"
           class="col-span-5 sm:col-span-1 flex items-center justify-center p-5 sm:p-10 bg-twi hover:bg-yellow cursor-pointer transition-all">
            <img src="<?php echo IMG . "share/twitter.svg" ?>"
                 alt="Udostępnij na FB"
                 class="w-10 sm:w-16 h-10 sm:h-16 el-drop-shadow">
        </a>
        <a href="https://www.linkedin.com/sharing/share-offsite/?url=https://dobryhasztag.pl"
           class="col-span-5 sm:col-span-1 flex items-center justify-center p-5 sm:p-10 bg-li hover:bg-yellow cursor-pointer transition-all">
            <img src="<?php echo IMG . "share/linkedin.svg" ?>"
                 alt="Udostępnij na FB"
                 class="w-10 sm:w-16 h-10 sm:h-16 el-drop-shadow">
        </a>
        <a href="#"
           data-copy-site-clipboard
           class="col-span-5 sm:col-span-1 flex items-center justify-center p-5 sm:p-10 bg-share hover:bg-yellow cursor-pointer transition-all">
            <img src="<?php echo IMG . "share/share.svg" ?>"
                 alt="Udostępnij na FB"
                 class="w-10 sm:w-16 h-10 sm:h-16 el-drop-shadow">
        </a>

    </div>
</section>