<br class="clear_float"/>
<div class="content_box" >
    <?php
    echo "<br />";
    echo CA_UI::render_rank_box('dark_blue', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box       
    echo CA_UI::render_rank_box('gold', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box 
    echo CA_UI::render_rank_box('green', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box

    echo CA_UI::render_rank_box('dark_purple', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box
    echo CA_UI::render_rank_box('orange', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box 
    echo CA_UI::render_rank_box('red', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box 
    ?>
    
<br class="clear_float"/>
</div>
<div class="content_box grey_background" >
    <div id="<?php echo $sports_table ?>_chart_div0"></div>
</div>
<div class="small_content_box grey_background float_right">
    <div id="<?php echo $sports_table ?>_chart_div1"></div>
</div>
<div class="small_content_box grey_background">
    <div id="<?php echo $sports_table ?>_chart_div2"></div>
</div>
<br class="clear_float"/>
<div class="small_content_box grey_background float_right">
    <div id="<?php echo $sports_table ?>_chart_div3"></div>
</div>
<div class="small_content_box grey_background float_right">
    <div id="<?php echo $sports_table ?>_chart_div4"></div>
</div>
<br class="clear_float"/>