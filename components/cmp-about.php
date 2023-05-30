<?php $about = get_field("about"); ?>
<div class="neo-before">
    <div class="relative bg-cyan-lighter px-10 py-6 border-4 border-dark rounded-2xl">
        <h2 class=" text-4xl font-gambado mb-5">
            <?php echo $about["title"]; ?>
        </h2>
        <div class=" text-xl leading-normal">
            <?php echo wpautop($about["content"]) ?>
        </div>
    </div>
</div>