<div class="grid grid-cols-3 gap-y-8 lg:gap-16 items-start">
    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative h-full bg-cyan-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                Chcesz zgłosić szkołę do programu?
                <br>
                #dobryhasztag w Twojej szkole
            </h2>

            <div class="mb-10">
                <p>
                    Wraz ze specjalistami w dziedzinie cyberprzemocy przyjedziemy do Twojej szkoły, aby zrobić warsztaty
                    dla uczniów, nauczycieli, a także rodziców. Wartościowe treści jakimi chcemy się dzielić pomogą
                    dzieciom radzić sobie z hejtem, a dorosłym - w odpowiedniej chwili zapobiegać jego skutkom oraz
                    umiejętnie wyłapywać i reagować na sytuację.
                </p>
            </div>

            <?php get_template_part( CMP, "btn", array(
	'content' => "Zgłoś do udziału",
	'type' => "button",
	'class' => 'w-full',
	'class_wrapper' => 'w-full mb-1.5 mr-1.5',
	'dataset' => array(
		"data-contact-trigger" => "school"
	)
)) ?>
        </div>
    </div>

    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative h-full bg-rose-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                Jestem osobą znaną i chcę wziąć udział!
                <br>
                Jak mogę Wam pomóc?
            </h2>

            <div class="mb-10">
                <p>
                    Jesteś influencerem, osobą publiczną i podoba Ci się nasza inicjatywa? Nie zwlekaj dłużej i
                    skontaktuj się z nami, abyśmy RAZEM mogli walczyć z występującym w Sieci zjawiskiem hejtu. Razem
                    mamy wielką moc, dlatego wykorzystajmy ją w 101%.
                </p>
            </div>

            <?php get_template_part( CMP, "btn", array(
	'content' => "Dołącz do nas",
	'type' => "button",
	'class' => 'w-full',
	'class_wrapper' => 'w-full mb-1.5 mr-1.5',
	'dataset' => array(
		"data-contact-trigger" => "join"
	)
)) ?>
        </div>
    </div>

    <div class="neo-before mb-1.5 mr-1.5 col-span-3 xl:col-span-1">
        <div class="relative h-full bg-yellow-lighter rounded-xl border-4 border-dark px-5 md:px-10 py-5">
            <h2 class="font-sofia text-4xl mb-5">
                Jeśli podoba Ci się nasza akcja - wesprzyj nas!
            </h2>

            <div class="mb-10">
                <p>
                    Cieszymy się tak dużym zainteresowaniem naszym projektem! Zapraszamy chętne firmy do połączenia sił
                    i szerzenia idei #DOBRYhasztag. Jeżeli jesteś zainteresowany dołączeniem do akcji i wsparciem nas -
                    koniecznie się z nami skontaktuj!
                </p>
            </div>

            <?php get_template_part( CMP, "btn", array(
	'content' => "Wesprzyj nas",
	'type' => "button",
	'class' => 'w-full',
	'class_wrapper' => 'w-full mb-1.5 mr-1.5',
	'dataset' => array(
		"data-contact-trigger" => "help"
	)
)) ?>
        </div>
    </div>
</div>