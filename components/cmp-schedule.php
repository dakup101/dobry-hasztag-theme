<h2 class="block text-4xl md:text-6xl text-shadow-rose font-sofia mb-10 md:mb-20 text-center">
    Harmonogram projektu
</h2>

<div class="px-16 xl:px-0">
    <?php get_template_part( CMP, "schedule-dates" ) ?>
</div>

<div data-schedule-items-skeleton
     class="hidden animate__animated animate__fadeIn">
    <figure class="neo-before h-full w-full mb-1.5 mr-1.5 transition-all before:bg-gray animate-pulse mt-10">
        <div class="relative bg-gray-light rounded-xl border-4 border-gray px-5 py-5">
            <span class="block w-20 h-6 mb-3 bg-gray"></span>
            <span class="block w-44 h-6 mb-10 bg-gray"></span>
            <span class="block w-full h-3 mb-2 bg-gray"></span>
            <span class="block w-full h-3 mb-2 bg-gray"></span>
            <span class="block w-2/3 h-3 mb-2 bg-gray"></span>

        </div>
    </figure>
</div>

<div data-schedule-items>

</div>

<div class="mt-10 flex justify-center">
    <?php get_template_part( CMP, "btn", array(
        'content' => "Sprawdź pełny harmonogram",
        'url' => "/kalendarz/",
        'class' => "hover:bg-yellow"
    )) ?>
</div>