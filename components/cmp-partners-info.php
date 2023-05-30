<div class="grid gap-y-10">
    <?php 
    $partners = get_field("partners");
    
    if (!empty($partners)) {
        foreach($partners as $key => $partner) {
            get_template_part( CMP, "partners-info-item", array(
                "key" => $key,
                "partner" => $partner
            ) );
        }
    } 
    ?>
</div>