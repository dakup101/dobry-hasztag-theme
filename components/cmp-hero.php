<div class="grid grid-cols-12 items-center">
    <div class="col-span-12 md:col-span-6">
        <h1 class=" text-hero font-black leading-tight">
            <span class="text-shadow">Dołącz do<br>naszej akcji</span>
            <br>
            <span class="text-stroke-rose text-yellow-light">#dobryhasztag</span>
        </h1>
    </div>
    <div class="col-span-12 md:col-span-6 md:pl-20 mt-10 md:mt-0">
        <?php $hero_vid = get_field("hero_vid") ?>
        <div class="relative neo-before mb-1.5 mr-1.5">
            <div class="border-4 border-dark rounded-2xl overflow-hidden bg-yellow relative h-full">
                <div class="border-b-4 px-4 py-2 font-sofia text-xl font-bold">
                    <span>
                        <?php echo $hero_vid["title"] ?>
                    </span>
                </div>
                <figure class=" py-28 md:py-48 relative">
                    <img src="<?php echo $hero_vid["preview"] ?>"
                         alt="<?php echo $hero_vid["title"] ?>"
                         class="absolute top-0 left-0 object-cover w-full h-full">
                    <button class="hero-play"
                            data-fetched-play-src="hero"
                            data-fetched-play="<?php echo $hero_vid["url"] ?>">
                        <figure class=" w-1/6">
                            <?php echo file_get_contents(IMG . "play.svg") ?>
                        </figure>
                    </button>
                </figure>
            </div>
        </div>
    </div>

    <dialog data-media-dialog='hero'
            class="max-w-full md:max-w-screen-sm lg:max-w-screen-md xl:max-w-screen-lg 2xl:max-w-screen-xl w-full">
        <div class="neo-before">
            <div class="bg-white h-full relative rounded-xl border-dark border-4 overflow-hidden">
                <div class="bg-yellow pl-5 pr-1 py-2 border-b-4 border-dark flex items-center justify-between">
                    <span class="font-bold font-sofia text-xl">
                        YouTube
                    </span>
                    <button class="text-dark hover:text-rose w-10 h-10">
                        <svg clip-rule="evenodd"
                             fill-rule="evenodd"
                             stroke-linejoin="round"
                             stroke-miterlimit="2"
                             viewBox="0 0 24 24"
                             class="fill-current"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="m21 3.998c0-.478-.379-1-1-1h-16c-.62 0-1 .519-1 1v16c0 .621.52 1 1 1h16c.478 0 1-.379 1-1zm-16.5.5h15v15h-15zm7.491 6.432 2.717-2.718c.146-.146.338-.219.53-.219.404 0 .751.325.751.75 0 .193-.073.384-.22.531l-2.717 2.717 2.728 2.728c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-2.728-2.728-2.728 2.728c-.147.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l2.728-2.728-2.722-2.722c-.146-.147-.219-.338-.219-.531 0-.425.346-.749.75-.749.192 0 .384.073.53.219z"
                                  fill-rule="nonzero" />
                        </svg>
                    </button>
                </div>
                <div class="bg-dark">
                    <iframe src=""
                            frameborder="0"
                            class="w-full aspect-video"></iframe>
                </div>
            </div>
        </div>
    </dialog>

</div>