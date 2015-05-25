<!-- slider div for bottom -->
<div id="wpbs_slider">
    <div class="icon_label" id="icon_label">
        <div class="wpbs_handle">
            <?php if ($icon_label != '') echo $icon_label; ?>
        </div>
    </div> 
    <div id="wpbs__cont">
        <div class="widgetcont">
            <?php dynamic_sidebar('Sliding Widget'); ?>
        </div>
    </div>       
</div>

<script>
    var wpssclose_ = 0;
    jQuery('#wpbs_slider').click(function () {
        if (wpssclose_ == 1) {
            jQuery('#wpbs_slider').animate({
                bottom: '-=<?php echo $height; ?>'
            }, 400, function () {
                // Animation complete.
            });
            wpssclose_ = 0;
        } else {
            jQuery('#wpbs_slider').animate({
                bottom: '+=<?php echo $height; ?>'
            }, 400, function () {
                // Animation complete.
            });
            wpssclose_ = 1;
        }
    });
</script>