<style type="text/css">
    #wpbs_slider{
        -webkit-border-top-left-radius: 6px;
        -webkit-border-bottom-left-radius: 6px;
        -moz-border-radius-topleft: 6px;
        -moz-border-radius-bottomleft: 6px;
        border-top-left-radius: 6px;
        border-bottom-left-radius: 6px;
        position: <?php if($sticky=="yes")echo "fixed";else echo "absolute";?>;
        top:<?php echo ($spos);?>px;
        right:-<?php echo $width;?>px;
        width:<?php echo ($width+$icon_box_width);?>px;;
        height:<?php echo ($icon_box_height);?>px;
       
        background: <?php echo $bg;?> url('<?php echo $icon_url;?>')  no-repeat;
        background-position: 3px 5px;
        cursor: pointer;
        z-index:999999;
    }
    #wpbs__cont{
        margin-left:<?php echo $icon_box_width;?>px;
        color:<?php echo $text_color;?>;
    }
    .icon_label{
        
        color: <?php echo $label_color;?>;
       float: left;
       /*padding: 10px <?php echo ($icon_box_width/8);?>px 10px <?php echo ($icon_box_width/8);?>px ;*/
       /*-webkit-transform: rotate(-270deg); 
       -moz-transform: rotate(-270deg);*/ 
       position:relative;
      /* top: <?php echo ($icon_box_height/2);?>px */
       width: <?php echo $icon_box_width;?>px;       
       height: <?php echo $icon_box_height;?>px;
    }
</style>