<?php
    $wssopt = get_option('wpbs_opt',array());
    extract($wssopt);
?>
   
<div class="wrap">
    <h2>Sliding Widgets <a target="_blank" class="add-new-h2" href="https://wordpress.org/support/view/plugin-reviews/sliding-widgets#postform">A 5* rating at wp.org will be very inspiring :)</a></h2> 
    <h2><a target="_blank" class="add-new-h2" href="http://wpeden.com/product/wordpress-sliding-widget-area/">Get PRO for creating multiple (unlimited) sliding widget area and more features</a></h2> 
    <br>
    <div style="clear: both;"></div>
    <div style="float: left;width: 500px;">
    <form action="" method="post" id="wptb">
        <input type="hidden" name="action" value="wpsw_save_settings">
        <div class="inside">
        <div class="boxdiv">

        <script type="text/javascript">
             jQuery(document).ready(function(){ 
                jQuery('#bg_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                }); 

                jQuery('#label_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                });

                jQuery('#text_colorbox').miniColors({
                            change: function(hex, rgb) {
                                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
                            }
                });
             }); 
        </script>
        <div class="sbox" id="box1">

        <div class="sbcont" id="sbcont-box1" >
        <table cellpadding="5" cellspacing="0" border="0" class="box_tbl">
        <tr>
            <td colspan="2">
            <label>Icon URL</label><br>
            <input type="text" name="wpbs__opt[icon_url]" value="<?php echo !empty($icon_url) ? $icon_url : ''; ?>" size="62" />
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
            <label>Icon Label (You can keep it empty if you want)</label><br>
            <input type="text" name="wpbs__opt[icon_label]" value="<?php echo !empty($icon_label) ? $icon_label : ''; ?>" size="62" />
            </td>
        </tr>
        
        <tr>
            <td>
            <label>Control Box Width</label><br>
            <input type="text" name="wpbs__opt[icon_box_width]" value="<?php echo !empty($icon_box_width) ? $icon_box_width : ''; ?>" size="10" /> PX
            </td>
            <td>
            <label>Control Box Height</label><br>
            <input type="text" name="wpbs__opt[icon_box_height]" value="<?php echo !empty($icon_box_height) ? $icon_box_height : ''; ?>" size="10" /> PX
            </td>
        </tr>
        <tr>
            <td>
            <label>Position</label><br>
            <select class="ps" rel="box1" name="wpbs__opt[position]">
            <option value="left" <?php if(!empty($position) && $position == "left") echo 'selected="selected"';?>>Left</option>
            <option value="right" <?php if(!empty($position) && $position == "right") echo 'selected="selected"';?>>Right</option>
            <option value="top" <?php if(!empty($position) && $position == "top") echo 'selected="selected"';?>>Top</option>
            <option value="bottom" <?php if(!empty($position) && $position == "bottom") echo 'selected="selected"';?>>Bottom</option>
            </select>
            </td>
            <td>
            <label id="spos_box1"><?php if(!empty($position) && ($position=="left" || position=="right")) echo "Distance from Top";else echo "Distance from Left";?></label><br>
            <input type="text" name="wpbs__opt[spos]" value="<?php if(!empty($spos))echo $spos;else echo "50"; ?>" size="10" /> PX
            </td>
        </tr>
        <tr>
            <td>
            <label>Sticky</label><br>
            <select name="wpbs__opt[sticky]" style="width: 70px;">
                <option value="yes" <?php if(!empty($sticky) && $sticky == "yes") echo 'selected="selected"';?>>Yes</option>
            <option value="no" <?php if(!empty($sticky) && $sticky == "no") echo 'selected="selected"';?>>No</option>
            </select>
            </td>
            <td>
            <label>Background Color</label><br>
            <input type="text" id="bg_colorbox" name="wpbs__opt[bg]" value="<?php echo !empty($bg) ? $bg : ''; ?>" size="10" /><br />
            <label>Text Color</label><br>
            <input type="text" id="text_colorbox" name="wpbs__opt[text_color]" value="<?php echo !empty($text_color) ? $text_color : ''; ?>" size="10" />
            </td>
        </tr>
        <tr>
            <td>
            <label>Box Width</label><br>
            <input type="text" name="wpbs__opt[width]" value="<?php echo !empty($width) ? $width : ''; ?>" size="10" /> PX
            </td>
            <td>
            <label>Box Height</label><br>
            <input type="text" name="wpbs__opt[height]" value="<?php echo !empty($height) ? $height : ''; ?>" size="10" /> PX
            </td>
        </tr>
        
        <tr>
            <td colspan="2">
                <input type="checkbox" name="wpbs__opt[disable]" value="1" <?php if(!empty($disable) && $disable == 1)echo 'checked="checked"'; else echo '';?>> Disable/Hide
            </td>
        </tr>
        </table>

        <div style="clear: both;">&nbsp;</div>
        </div>     
        </div>
        </div>
        <br>

        <input type="submit" id="btn" class="button-primary" value="Save Settings"> 
        <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> Saving...</span><br /><br />
        </div>  
        
        <br clear="all" />
        <br clear="all" />
    
    </form>  
    </div>
    
    
    
    <div  style="float: right;width: 350px;">
        <a href="http://wpeden.com/" class="promo" target="_blank"><h3>WordPress Themes & Plugins Collection</h3><img src="<?php echo plugins_url('sliding-widgets/images/wpeden.png'); ?>" /></a>
        <a href="http://liveform.org/" class="promo" target="_blank"><h3>Drag & Drop Form Builder</h3><img vspace="12" src="<?php echo plugins_url('sliding-widgets/images/liveform.png'); ?>" /></a>
        <a href="http://wpeden.com/product/minimax-page-layout-builder/" class="promo" target="_blank"><h3>Drag & Drop Page Layout Builder</h3><img src="<?php echo plugins_url('sliding-widgets/images/plb.png'); ?>" /></a>
        <a href="http://www.wpdownloadmanager.com/" class="promo" target="_blank"><h3>WordPress Download Manager Pro</h3><img src="<?php echo plugins_url('sliding-widgets/images/wpdm.png'); ?>" /></a>
        
        <div style="clear: both;"></div>
    </div>
    <br>
    <br>
     
</div>
    
<br clear="all" />
<br clear="all" />
    
<script>

    window.onload=changeps;
    function changeps(){
        if(jQuery('.ps').val()=="left"||jQuery('.ps').val()=="right"){
            jQuery('#spos').text("Top");
        }else{
            jQuery('#spos').text("Left");
        }
    }
    jQuery('.ps').live("change",function(){        
        if(jQuery(this).val()=="left"||jQuery(this).val()=="right"){
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Distance from Top");
        }else{
            jQuery('#spos_'+jQuery(this).attr("rel")).text("Distance from Left");
        }        
    });

    jQuery('#wptb').submit(function(){
           jQuery(this).ajaxSubmit({
               'url': ajaxurl,
               'beforeSubmit':function(){
                   jQuery('#loading').fadeIn();
               },
               'success':function(res){
                   jQuery('#loading').fadeOut();
               }
           });
      return false;
      });

</script>