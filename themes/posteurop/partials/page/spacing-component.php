<?php

$background_color = get_sub_field("background_color") ?? "";
$margin_bottom = get_sub_field("margin_bottom") ?? "";
$half_on_mobile = get_sub_field("half_on_mobile") ? "half-on-mobile" : "";

?>


<div class="<?= $background_color; ?> <?= $margin_bottom; ?> <?= $half_on_mobile; ?>"></div>