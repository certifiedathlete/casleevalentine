<?php
echo "<br /><br />";



CA_UI::render_rank_box('blue', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box       
CA_UI::render_rank_box('gold', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box 
CA_UI::render_rank_box('green', 'left', $ca_user, $ca_sports_rank); // renders a profile rank box
CA_UI::render_rank_box('gold', 'right', $ca_user, $ca_sports_rank); // renders a profile rank box
CA_UI::render_rank_box('blue', 'right', $ca_user, $ca_sports_rank); // renders a profile rank box 
CA_UI::render_rank_box('purple', 'right', $ca_user, $ca_sports_rank); // renders a profile rank box 
?>

<div class="content_box grey_background" >

    <div id="<?php echo $sports_table ?>_chart_div0"></div>
</div>

<div class="small_content_box grey_background float_right">

    <div id="<?php echo $sports_table ?>_chart_div1"></div>
</div>
<div class="small_content_box grey_background">

    <div id="<?php echo $sports_table ?>_chart_div2"></div>
</div>
<div class="small_content_box grey_background float_right">

    <div id="<?php echo $sports_table ?>_chart_div3"></div>
</div>

<div class="small_content_box grey_background float_right">

    <div id="<?php echo $sports_table ?>_chart_div4"></div>
</div>