<!-- slider div for bottom -->
<div id="wpbs_slider">
    <div class="icon_label">
        <?php //if(!$icon_url)echo $icon_label;?>
    </div>
    <div id="wpbs__cont">
        <?php dynamic_sidebar('Sliding Widget');?>
    </div>
</div>
<script language="JavaScript">
    <!--
      var wpssclose_ = 0;
      jQuery('#wpbs_slider').click(function() {
          if(wpssclose_==1) {
           jQuery('#wpbs_slider').animate({            
            bottom: '-=<?php echo $height;?>'            
          }, 400, function() {
            // Animation complete.
          });   
          wpssclose_ = 0;
          } else {
          jQuery('#wpbs_slider').animate({            
            bottom: '+=<?php echo $height;?>'            
          }, 400, function() {
            // Animation complete.
          });
          wpssclose_ = 1;
          }
      });
    //-->
</script>