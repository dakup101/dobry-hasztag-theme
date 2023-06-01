<dialog data-schedule-dialog
        class="max-w-5xl w-full">
    <?php $social = get_field("opt_social", "options") ?>
    <div class="neo-before">
        <div class="bg-white relative rounded-xl border-dark border-4 overflow-hidden">
            <div class="bg-yellow pl-5 pr-1 py-2 border-b-4 border-dark flex items-center justify-between">
                <span class="font-bold font-sofia text-xl">Wydarzenie</span>
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
            <div class="px-1 py-1">
                <div class="pl-4 py-4 pr-12 contact-dialog-content"
                     data-simplebar>
                    <div class="items-center"
                         data-event-content>
                    </div>
                </div>
            </div>

        </div>
    </div>
</dialog>