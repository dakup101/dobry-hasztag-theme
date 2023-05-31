<div class="grid gap-y-10">
    <?php 
$info = get_field("descs");
foreach($info as $key=>$el) get_template_part(CMP , "about-info-item", array(
    "key" => $key,
    "parsed" => $el["args"],
))
?>
</div>