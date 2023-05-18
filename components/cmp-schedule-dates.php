<?php $dates = schedule_return_days(); 

if (!empty($dates)) : ?>
<div class="relative">
    <div data-schedule-dates
         class="overflow-hidden">
        <div class="swiper-wrapper items-center">
            <?php foreach($dates as $date_str): ?>
            <div class="swiper-slide">
                <div class="neo-before mb-1.5 mr-1.5">
                    <?php  
                $today = new DateTime('today midnight');
                $timestamp = $today->getTimestamp(); 
                $is_today = $timestamp == strtotime($date_str);
                ?>
                    <button data-date="<?php echo $date_str ?>"
                            class="relative w-full border-4 border-dark flex flex-col px-5 rounded-xl py-5 items-center font-sofia transition-all
                        hover:translate-x-1.5 hover:translate-y-1.5 
                        <?php echo $is_today ? "bg-rose" : "bg-white"  ?>">
                        <?php if ($is_today): ?>
                        <span class="text-white">Dzisiaj</span>
                        <?php endif; ?>
                        <span class="text-xl uppercase">
                            <?php echo get_month_in_pl(new DateTime($date_str)) ?>
                        </span>
                        <span class="text-4xl uppercase <?php echo $is_today ? "text-cyan" : "" ?>">
                            <?php echo date("d", strtotime($date_str)) ?>
                        </span>
                    </button>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents(IMG . "arrow_harmonogram_prev.svg"),
                        'type' => 'button',
                        'class' => 'rounded-full bg-white p-3 schedule-prev hover:bg-rose cursor-pointer',
                        'class_wrapper' => 'before:rounded-full absolute top-1/2 -left-20 -translate-y-1/2'
                    )) ?>
        <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents(IMG . "arrow_harmonogram_next.svg"),
                        'type' => 'button',
                        'class' => 'rounded-full bg-white p-3 schedule-next hover:bg-rose cursor-pointer',
                        'class_wrapper' => 'before:rounded-full absolute top-1/2 -right-20 -translate-y-1/2'
                    )) ?>
    </div>
</div>


<?php endif; ?>