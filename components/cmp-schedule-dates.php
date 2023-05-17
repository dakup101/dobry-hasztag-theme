<?php $dates = schedule_return_days(); 

if (!empty($dates)) : ?>
<div data-schedule-dates
     class="relative">
    <?php print_r(schedule_return_days()) ?>
    <div class="swiper-wrapper items-center overflow-hidden">
        <?php foreach($dates as $date_str): ?>
        <div class="swiper-slide">
            <div class="neo-before mb-1.5 mr-1.5">
                <?php  
                $today = new DateTime('today midnight');
                $timestamp = $today->getTimestamp(); 
                $is_today = $timestamp == strtotime($date_str);
                ?>
                <div
                     class="relative border-4 border-dark flex flex-col px-5 rounded-2xl py-5 items-center font-sofia <?php echo $is_today ? "bg-rose" : "bg-white"  ?>">
                    <?php if ($is_today): ?>
                    <span class="text-white">Dzisiaj</span>
                    <?php endif; ?>
                    <span class="text-xl uppercase">
                        <?php echo get_month_in_pl(new DateTime($date_str)) ?>
                    </span>
                    <span class="text-4xl uppercase <?php echo $is_today ? "text-cyan" : "" ?>">
                        <?php echo date("d", strtotime($date_str)) ?>
                    </span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php get_template_part( CMP, "btn", array(
                        'content' => file_get_contents(IMG . "bold-arrow-left.svg"),
                        'type' => 'button',
                        'class' => 'rounded-full bg-white p-3 schedule-prev',
                        'class_wrapper' => 'before:rounded-full absolute top-1/2 -left-10 -translate-y-1/2'
                    )) ?>
    <div class="schedule-prev"></div>
</div>

<?php endif; ?>