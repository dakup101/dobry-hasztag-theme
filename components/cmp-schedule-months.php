<?php $months = schedule_return_months(); ?>


<pre>
        <?php print_r($months) ?>
</pre>

<?php // Upcoming months
if (!empty($months)) : ?>

<h4 class="block text-3xl text-shadow-rose-sm font-sofia mb-10">Zblizające się:</h4>

<div class="grid gap-y-5">
    <?php foreach($months as $month=>$days) {
        
        $month_arr = explode(",", $month);

         get_template_part( CMP, "btn", array(
            "type" => "button", 
            "content" => get_month_in_pl_by_number($month_arr[0]) . " " . $month_arr[1], 
            "class" => "hover:bg-yellow",
            "class_wrapper" => "mb-1.5 mr-1.5",
         ));
    } ?>
</div>

<?php endif; ?>