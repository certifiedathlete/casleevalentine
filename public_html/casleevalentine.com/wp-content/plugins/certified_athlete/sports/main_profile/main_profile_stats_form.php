<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////				
/////////////////////////////       Sport Specific Code Declarations          /////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//print_r($stat_array);

$wins = 0; //inside while loop to render wins and losses correctly
$losses = 0; //inside while loop to render wins and losses correctly
$ties = 0; //inside while loop to render wins and losses correctly				
//other variables to render stats correctly
//$stat_array[$stats_i]['opponent'];


$event_name = $ca_event->ca_event_name;
$game_date = $ca_event->ca_event_date;

$team_name = $ca_event->home_organization_object->get('ca_organization_name');
$team_score = $ca_event->ca_event_home_team_score;
$team_record = $ca_event->ca_event_home_team_record; //make this an array created by sheer math
//$game_date = date("M-d-Y", strtotime($game_date)); //format game date
$opponent = $ca_event->away_organization_object->get('ca_organization_name');
$opponent_score = $ca_event->ca_event_away_team_score;
$opponent_record = $ca_event->ca_event_away_team_record;




//echo '<pre><br>fgfsdgdsfff<br>';
//print_r($ca_event->ca_event_away_team);//dont need the team objects here... this saves me 28 secs of load time!!!!!!!!!!!
//echo '</pre><br>dfsgdsfgsdf<br>';
//refine this to be more accurate... integrate events with teams and stats...!
//if event id and team id, and stats event id match... then they should display


if ($opponent_score > $team_score) {
    $losses = 1;
    $win_or_loss = "<strong class='text-red' style='display:inline-block;'>LOSS</strong>";
} elseif ($opponent_score < $team_score) {
    $wins = 1;
    $win_or_loss = "<strong class='text-green' style='display:inline-block;'>WIN</strong>";
} else {
    $ties = 1;
    $win_or_loss = "<strong class='text-blue' style='display:inline-block;'>TIE</strong>";
}

$pass_completions = $stat_array->pass_completions;
$pass_attempts = $stat_array->pass_attempts;
$pass_yards = $stat_array->pass_yards;
$pass_touchdowns = $stat_array->pass_touchdowns;
$pass_interceptions = $stat_array->pass_interceptions;
$rush_attempts = $stat_array->rush_attempts;
$rush_yards = $stat_array->rush_yards;
$rush_touchdowns = $stat_array->rush_touchdowns;
$receptions = $stat_array->receptions;
$reception_yards = $stat_array->reception_yards;
$reception_touchdowns = $stat_array->reception_touchdowns;
$field_goal_attempts = $stat_array->field_goal_attempts;
$field_goals_made = $stat_array->field_goals_made;
$extra_points_kicked = $stat_array->extra_points_kicked;
$two_point_conversions = $stat_array->two_point_conversions;
$total_tackles = $stat_array->total_tackles;
$solo_tackles = $stat_array->solo_tackles;
$assisted_tackles = $stat_array->assisted_tackles;
$sacks = $stat_array->sacks;
$forced_fumbles = $stat_array->forced_fumbles;
$fumble_recoveries = $stat_array->fumble_recoveries;
$interceptions = $stat_array->interceptions;
$interception_return_yards = $stat_array->interception_return_yards;
$interception_touchdowns = $stat_array->interception_touchdowns;
$kickoff_returns = $stat_array->kickoff_returns;
$kickoff_return_yards = $stat_array->kickoff_return_yards;
$kickoff_return_touchdowns = $stat_array->kickoff_return_touchdowns;
$punt_returns = $stat_array->punt_returns;
$punt_return_yards = $stat_array->punt_return_yards;
$punt_return_touchdowns = $stat_array->punt_return_touchdowns;
$kickoffs = $stat_array->kickoffs;
$touchbacks_kicked = $stat_array->touchbacks_kicked;
$punts = $stat_array->punts;
$punt_yards = $stat_array->punt_yards;
//$longest_punt = $stat_array->longest_punt;
$longest_punt = $stat_array->longest_punt;
$blocked_field_goals = $stat_array->blocked_field_goals;
$blocked_punts = $stat_array->blocked_punts;
$game_stat32 = $stat_array->game_stat32;
$game_stat33 = $stat_array->game_stat33;
$game_stat34 = $stat_array->game_stat34;
$game_stat35 = $stat_array->game_stat35;
$comment = $stat_array->game_comment;

$player_stats_id = $stat_array->id;
$player_id = $stat_array->ca_athlete_id;

$total_wins = $total_wins + $wins;
$total_losses = $total_losses + $losses;
$total_ties = $total_ties + $ties;


//////////////////////////////////////////////////////////////////////////////////////////////////////////////				
/////////////////////////////    End  Sport Specific Code Declarations           //////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////	


if ($rush_attempts != 0) {

    $rush_per_carry = $rush_yards / $rush_attempts;
    $rush_per_carry = number_format($rush_per_carry, 2);
}

if ($receptions != 0) {

    $reception_yards_per_catch = $reception_yards / $receptions;
    $reception_yards_per_catch = number_format($reception_yards_per_catch, 2);
}

if ($kickoff_returns != 0) {

    $avg_kick_return = $kickoff_return_yards / $kickoff_returns;
    $avg_kick_return = number_format($avg_kick_return, 2);
}

if ($punt_returns != 0) {

    $avg_punt_return = $punt_return_yards / $punt_returns;
    $avg_punt_return = number_format($avg_punt_return, 2);
}

if ($punts != 0) {

    $avg_yards_per_punt = $punt_yards / $punts;
    $avg_yards_per_punt = number_format($avg_yards_per_punt, 2);
}



If ($game_stat32 > $game_stat32_total) {

    $game_stat32_total = $game_stat32; //code to keep longest punt
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////				
///////////////////////////// End Sport Specific Code Definitions and Calculations   ////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

global $current_user;
wp_get_current_user();
///encapsulate this function
$wp_user_id = $current_user->ID;

//echo '<br>';
//echo $wp_user_id;
//echo '<br>';
//echo $player_id;
//echo '<br>';
//if ($_SESSION['logged_in_id'] == $stat_array->player_id) {
$rank_box = CA_UI::render_rank_box('blue', 'left', $ca_user, $stats_rank);
$stat_box = CA_UI::render_stat_box('pass', 10, 15, 50);

if (get_current_user_id() == $player_id) {//allow edit
    $content_slider_stats.="
  
<!-- We will work on our stats table below -->                            
<div class=\"box-heading gradient-grey boxHeader\">
    <a href=\"#\" onclick=\"return false\" title='" . $sports_table . "_player_stat_content" . $stats_i . "');\">
    " . $win_or_loss . "&nbsp; | &nbsp;" . $game_date . ": 
    Result : " . $team_name . " (" . $team_record . ") - " . $team_score . "
    &nbsp; vs &nbsp;
    " . $opponent . " (" . $opponent_record . ") - " . $opponent_score . "                
    
    </a>
</div>							
<div class=\"editBox box_content\" id=\"" . $sports_table . "_player_stat_content" . $stats_i . "\" style=\"" . $display_flag . "\">
<div id=\"" . $sports_table . "_status_" . $stats_i . "\"></div>
    
" . $rank_box . "
" . $stat_box . "

<form id=\"" . $sports_table . "_stat_form_" . $stats_i . "\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Pass Offense<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
            <tr>    
                <td>&nbsp;Pass Completions</td>
                <td>&nbsp;Pass Attempts</td>
                <td>&nbsp;Pass Yds</td>
                <td>&nbsp;Pass TD</td>
                <td>&nbsp;Pass Int</td>
            </tr>
            <tr>
                <td><input name=\"pass_completions\" type=\"text\" class=\"formFields\" id=\"pass_completions\" value=\"" . $pass_completions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"pass_attempts\" type=\"text\" class=\"formFields\" id=\"pass_attempts\" value=\"" . $pass_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"pass_yards\" type=\"text\" class=\"formFields\" id=\"pass_yards\" value=\"" . $pass_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"pass_touchdowns\" type=\"text\" class=\"formFields\" id=\"pass_touchdowns\" value=\"" . $pass_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"pass_interceptions\" type=\"text\" class=\"formFields\" id=\"pass_interceptions\" value=\"" . $pass_interceptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            </tr>
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Rush Offense<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>  							
                <td>&nbsp;Rush Attempts</td>
                <td>&nbsp;Rush Yds</td>								  
                <td>&nbsp;Rush Avg</td>
                <td>&nbsp;Rush TD</td>
        </tr>
        <tr>
                <td><input name=\"rush_attempts\" type=\"text\" class=\"formFields\" id=\"rush_attempts\" value=\"" . $rush_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"rush_yards\" type=\"text\" class=\"formFields\" id=\"rush_yards\" value=\"" . $rush_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td id=\"rush_per_carry\">" . $rush_per_carry . "</td>								  
                <td><input name=\"rush_touchdowns\" type=\"text\" class=\"formFields\" id=\"rush_touchdowns\" value=\"" . $rush_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr> 
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Receiving<h3/>

</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>
                <td>&nbsp;Rec</td>
                <td>&nbsp;Rec Yds</td>
                <td>&nbsp;Rec Avg per Catch</td>
                <td>&nbsp;Rec TDs</td>	  
        </tr>
        <tr>	
                <td><input name=\"receptions\" type=\"text\" class=\"formFields\" id=\"receptions\" value=\"" . $receptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"reception_yards\" type=\"text\" class=\"formFields\" id=\"reception_yards\" value=\"" . $reception_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td id=\"reception_yards_per_catch\">" . $reception_yards_per_catch . "</td>
                <td><input name=\"reception_touchdowns\" type=\"text\" class=\"formFields\" id=\"reception_touchdowns\" value=\"" . $reception_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Other Offense<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>
            <td>&nbsp;Field Goal Attempts</td>
            <td>&nbsp;Field Goals Made</td>
            <td>&nbsp;Xtra Points Kicked</td>
            <td>&nbsp;Two Point conversions</td>	  
        </tr>
        <tr>
            <td><input name=\"field_goal_attempts\" type=\"text\" class=\"formFields\" id=\"field_goal_attempts\" value=\"" . $field_goal_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td><input name=\"field_goals_made\" type=\"text\" class=\"formFields\" id=\"field_goals_made\" value=\"" . $field_goals_made . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td><input name=\"extra_points_kicked\" type=\"text\" class=\"formFields\" id=\"extra_points_kicked\" value=\"" . $extra_points_kicked . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td><input name=\"two_point_conversions\" type=\"text\" class=\"formFields\" id=\"two_point_conversions\" value=\"" . $two_point_conversions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Defense<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>								  
                <td>&nbsp;Tackles</td>
                <td>&nbsp;Solo</td>
                <td>&nbsp;Asst</td>
                <td>&nbsp;Sacks</td>
                <td>&nbsp;</td>
        </tr>
        <tr>
                <td><input name=\"total_tackles\" type=\"text\" class=\"formFields\" id=\"total_tackles\" value=\"" . $total_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"solo_tackles\" type=\"text\" class=\"formFields\" id=\"solo_tackles\" value=\"" . $solo_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"assisted_tackles\" type=\"text\" class=\"formFields\" id=\"assisted_tackles\" value=\"" . $assisted_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"sacks\" type=\"text\" class=\"formFields\" id=\"sacks\" value=\"" . $sacks . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td>&nbsp;</td>
        </tr>
        <tr>	
                <td>&nbsp;Forced Fumbles</td>
                <td>&nbsp;Fumble Recoveries</td>
                <td>&nbsp;Int</td>
                <td>&nbsp;Int Return Yds</td>
                <td>&nbsp;Int for TD</td>
        </tr>
        <tr>
                <td><input name=\"forced_fumbles\" type=\"text\" class=\"formFields\" id=\"forced_fumbles\" value=\"" . $forced_fumbles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"fumble_recoveries\" type=\"text\" class=\"formFields\" id=\"fumble_recoveries\" value=\"" . $fumble_recoveries . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"interceptions\" type=\"text\" class=\"formFields\" id=\"interceptions\" value=\"" . $interceptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"interception_return_yards\" type=\"text\" class=\"formFields\" id=\"interception_return_yards\" value=\"" . $interception_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"interception_touchdowns\" type=\"text\" class=\"formFields\" id=\"interception_touchdowns\" value=\"" . $interception_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Special Teams<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>							  
                <td>&nbsp;K Return</td>
                <td>&nbsp;K Return Yds</td>
                <td>&nbsp;K Return Avg</td>
                <td>&nbsp;K Return TDs</td>
        </tr>
        <tr>
                <td><input name=\"kickoff_returns\" type=\"text\" class=\"formFields\" id=\"kickoff_returns\" value=\"" . $kickoff_returns . "\" maxlength=\"10\"  size=\"6%\" /> </td>							
                <td><input name=\"kickoff_return_yards\" type=\"text\" class=\"formFields\" id=\"kickoff_return_yards\" value=\"" . $kickoff_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td id=\"avg_kick_return\">" . $avg_kick_return . "</td>
                <td><input name=\"kickoff_return_touchdowns\" type=\"text\" class=\"formFields\" id=\"kickoff_return_touchdowns\" value=\"" . $kickoff_return_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
        <tr>
                <td>&nbsp;P Return</td>	
                <td>&nbsp;P Return Yds</td>
                <td>&nbsp;P Return Avg</td>
                <td>&nbsp;P Return TDs</td>
        </tr>
        <tr>
                <td><input name=\"punt_returns\" type=\"text\" class=\"formFields\" id=\"punt_returns\" value=\"" . $punt_returns . "\" maxlength=\"10\"  size=\"6%\" /> </td>							
                <td><input name=\"punt_return_yards\" type=\"text\" class=\"formFields\" id=\"punt_return_yards\" value=\"" . $punt_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td id=\"avg_punt_return\">" . $avg_punt_return . "</td>
                <td><input name=\"punt_return_touchdowns\" type=\"text\" class=\"formFields\" id=\"punt_return_touchdowns\" value=\"" . $punt_return_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
        <tr> 
                <td>&nbsp;Punts</td>
                <td>&nbsp;Punt Yards</td>
                <td>&nbsp;Avg Punt Distance</td>	
                <td>&nbsp;Longest Punt</td>
        </tr>
        <tr>	                
                <td><input name=\"punts\" type=\"text\" class=\"formFields\" id=\"punts\" value=\"" . $punts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"punt_yards\" type=\"text\" class=\"formFields\" id=\"punt_yards\" value=\"" . $punt_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td id=\"avg_yards_per_punt\">" . $avg_yards_per_punt . "</td>
                <td><input name=\"longest_punt\" type=\"text\" class=\"formFields\" id=\"longest_punt\" value=\"" . $longest_punt . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
        <tr>
                <td>&nbsp;Blocked Field Goals</td>
                <td>&nbsp;Blocked Punts</td>
                <td>&nbsp;Kickoffs</td>
                <td>&nbsp;Touchbacks kicked</td>
        </tr>
        <tr>	
                <td><input name=\"blocked_field_goals\" type=\"text\" class=\"formFields\" id=\"blocked_field_goals\" value=\"" . $blocked_field_goals . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"blocked_punts\" type=\"text\" class=\"formFields\" id=\"blocked_punts\" value=\"" . $blocked_punts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"kickoffs\" type=\"text\" class=\"formFields\" id=\"kickoffs\" value=\"" . $kickoffs . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td><input name=\"touchbacks_kicked\" type=\"text\" class=\"formFields\" id=\"touchbacks_kicked\" value=\"" . $touchbacks_kicked . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
    </table>

<div class=\"box-heading box-heading_margin gradient-green\">
    <h3>&nbsp;Game Comment<h3/>
</div>

    <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>
            <td colspan=\"6\" valign=\"top\">Comment (How did you do this game?)<br /><textarea name=\"game_comment\" cols=\"\" rows=\"3\" class=\"formFields\" size=\"50%\" style=\"width:80%;\">" . $comment . "</textarea></td>
            <td width=\"56\" valign=\"top\"><input class=\"btnUpdate\" name=\"btnUpdate\" type=\"submit\" id=\"btnUpdate\" value=\"Update\" />
            <input name=\"player_stats_id\" type=\"hidden\" id=\"" . $player_stats_id . "\" value=\"" . $player_stats_id . "\" />
                <input name=\"event_id\" type=\"hidden\" id=\"" . $ca_event->id . "\" value=\"" . $ca_event->id . "\" />
            <input name=\"player_id\" type=\"hidden\" id=\"" . $player_id . "\" value=\"" . $player_id . "\" />
            <input name=\"sports_table\" type=\"hidden\" id=\"" . $sports_table . "\" value=\"" . $sports_table . "\" />
            <input name=\"edit_function\" type=\"hidden\" id=\"sports_stats\" value=\"sports_stats\" />
            <input name=\"class_action\" type=\"hidden\" id=\"class_action\"\" value=\"save_sports_athlete_stats\" />
            <input name=\"action\" type=\"hidden\" id=\"ajax_upload\"\" value=\"ajax_upload\" />
            <input name=\"controller\" type=\"hidden\" id=\"controller\" value=\"ca_sports_athlete_stats\" />
            
<input name=\"ca_wp_user_id\" type=\"hidden\" id=\"ca_wp_user_id\" value=\"" . $wp_user_id . "\" />
            <input name=\"stats_i\" type=\"hidden\" id=\"" . $stats_i . "\" value=\"" . $stats_i . "\" />
        </tr>
    </table>

        </form>

</div>
<!-- End Edit Box -->				
<br /><br />
";
    
} else {//dont allow edit
    
    $content_slider_stats.="							
<!-- We will work on our stats table below -->                            
<div class=\"box-heading gradient-grey boxHeader\">
    <a href=\"#\" onclick=\"return false\" title='" . $sports_table . "_player_stat_content" . $stats_i . "');\">
    " . $win_or_loss . "&nbsp; | &nbsp;" . $game_date . ": 
    Result : " . $team_name . " (" . $team_record . ") - " . $team_score . "
    &nbsp; vs &nbsp;
    " . $opponent . " (" . $opponent_record . ") - " . $opponent_score . "                
    
    </a>
</div>													
<div class=\"editBox box_content\" id=\"" . $sports_table . "_player_stat_content" . $stats_i . "\" style=\"" . $display_flag . "\">                                                   

     <div class=\"box-heading box-heading_margin gradient-green\">
     <h3>&nbsp;Pass Offense<h3/>
    </div>
        ";
    CA_UI::render_rank_box('blue', 'left', $ca_user, $stats_rank);
    CA_UI::render_stat_box('pass', 10, 15, 50);

    $content_slider_stats.="
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>    
                <td>&nbsp;Pass Completions</td>
                <td>&nbsp;Pass Attempts</td>
                <td>&nbsp;Pass Yds</td>
                <td>&nbsp;Pass TD</td>
                <td>&nbsp;Pass Int</td>
            </tr>
            <tr>
                <td>" . $pass_completions . "</td>
                <td>" . $pass_attempts . "</td>
                <td>" . $pass_yards . "</td>
                <td>" . $pass_touchdowns . "</td>
                <td>" . $pass_interceptions . "</td>
            </tr>
        </table>
  
    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Rush Offense<h3/>
    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>  							
                <td>&nbsp;Rush Attempts</td>
                <td>&nbsp;Rush Yds</td>								  
                <td>&nbsp;Rush Avg</td>
                <td>&nbsp;Rush TD</td>
            </tr>
            <tr>
                <td>" . $rush_attempts . "</td>
                <td>" . $rush_yards . "</td>
                <td id=\"rush_per_carry\">" . $rush_per_carry . "</td>								  
                <td>" . $rush_touchdowns . "</td>
            </tr> 
        </table>
    
    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Receiving<h3/>

    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>
                <td>&nbsp;Rec</td>
                <td>&nbsp;Rec Yds</td>
                <td>&nbsp;Rec Avg per Catch</td>
                <td>&nbsp;Rec TDs</td>	  
            </tr>
            <tr>	
                <td>" . $receptions . "</td>
                <td>" . $reception_yards . "</td>
                <td id=\"reception_yards_per_catch\">" . $reception_yards_per_catch . "</td>
                <td>" . $reception_touchdowns . "</td>
            </tr>
        </table>
    
    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Other Offense<h3/>
    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>
                <td>&nbsp;Field Goal Attempts</td>
                <td>&nbsp;Field Goals Made</td>
                <td>&nbsp;Xtra Points Kicked</td>
                <td>&nbsp;Two Point conversions</td>	  
            </tr>
            <tr>
                <td>" . $field_goal_attempts . "</td>
                <td>" . $field_goals_made . "</td>
                <td>" . $extra_points_kicked . "</td>
                <td>" . $two_point_conversions . "</td>
            </tr>
        </table>
    
    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Defense<h3/>
    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>								  
                <td>&nbsp;Tackles</td>
                <td>&nbsp;Solo</td>
                <td>&nbsp;Asst</td>
                <td>&nbsp;Sacks</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>" . $total_tackles . "</td>
                <td>" . $solo_tackles . "</td>
                <td>" . $assisted_tackles . "</td>
                <td>" . $sacks . "</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;Forced Fumbles</td>
                <td>&nbsp;Fumble Recoveries</td>
                <td>&nbsp;Int</td>
                <td>&nbsp;Int Return Yds</td>
                <td>&nbsp;Int for TD</td>
            </tr>
            <tr>
                <td>" . $forced_fumbles . "</td>
                <td>" . $fumble_recoveries . "</td>
                <td>" . $interceptions . "</td>
                <td>" . $interception_return_yards . "</td>
                <td>" . $interception_touchdowns . "</td>
            </tr>
        </table>
    
    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Special Teams<h3/>
    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>							  
                <td>&nbsp;K Return</td>
                <td>&nbsp;K Return Yds</td>
                <td>&nbsp;K Return Avg</td>
                <td>&nbsp;K Return TDs</td>
            </tr>
            <tr>
                <td>" . $kickoff_returns . "</td>							
                <td>" . $kickoff_return_yards . "</td>
                <td id=\"avg_kick_return\">" . $avg_kick_return . "</td>
                <td>" . $kickoff_return_touchdowns . "</td>
            </tr>
            <tr>
                <td>&nbsp;P Return</td>	
                <td>&nbsp;P Return Yds</td>
                <td>&nbsp;P Return Avg</td>
                <td>&nbsp;P Return TDs</td>
            </tr>
            <tr>
                <td>" . $punt_returns . "</td>							
                <td>" . $punt_return_yards . "</td>
                <td id=\"avg_punt_return\">" . $avg_punt_return . "</td>
                <td>" . $punt_return_touchdowns . "</td>
            </tr>
            <tr>
                <td>&nbsp;Punts</td>
                <td>&nbsp;Punt Yards</td>
                <td>&nbsp;Avg Punt Distance</td>	
                <td>&nbsp;Longest Punt</td>
            </tr>
            <tr>
                <td>" . $punts . "</td>
                <td>" . $punt_yards . "</td>
                <td id=\"avg_yards_per_punt\">" . $avg_yards_per_punt . "</td>
                <td>" . $longest_punt . "</td>
            </tr>            
            <tr>            								  
                <td>&nbsp;Blocked Field Goals</td>
                <td>&nbsp;Blocked Punts</td>
                <td>&nbsp;Kickoffs</td>
                <td>&nbsp;Touchbacks kicked</td>
            </tr>
            <tr>
                <td>" . $blocked_field_goals . "</td>
                <td>" . $blocked_punts . "</td>	
                <td>" . $kickoffs . "</td>
                <td>" . $touchbacks_kicked . "</td>
            </tr>  
        </table>

    <div class=\"box-heading box-heading_margin gradient-green\">
         <h3>&nbsp;Game Comment<h3/>
    </div>
    
        <table align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
               <tr>
                <td colspan=\"6\" valign=\"top\">
                Comment (How did you do this game?)<br />
                    " . $comment . "</td>
            </tr>
        </table>

</div>
<!-- End Edit Box -->
<br /><br />						";
}/// end else



if ($game_stat6_total != 0) {

    $total_rush_per_carry = $game_stat7_total / $game_stat6_total;
    $total_rush_per_carry = number_format($total_rush_per_carry, 2);
}
if ($game_stat9_total != 0) {

    $total_reception_yards_per_catch = $game_stat10_total / $game_stat9_total;
    $total_reception_yards_per_catch = number_format($total_reception_yards_per_catch, 2);
}


if ($game_stat23_total != 0) {

    $total_avg_kick_return = $game_stat24_total / $game_stat23_total;
    $total_avg_kick_return = number_format($total_avg_kick_return, 2);
}


if ($game_stat26_total != 0) {

    $total_avg_punt_return = $game_stat27_total / $game_stat26_total;
    $total_avg_punt_return = number_format($total_avg_punt_return, 2);
}

if ($game_stat30_total != 0) {

    $total_avg_yards_per_punt = $game_stat31_total / $game_stat30_total;
    $total_avg_yards_per_punt = number_format($total_avg_yards_per_punt, 2);
}


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////                                                           /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



echo $content_slider_stats;

$content_slider_stats = ""; //clears this variable for future use in the other tables

$rush_per_carry = ''; //reset variables for loop

$reception_yards_per_catch = '';

$avg_kick_return = '';

$avg_punt_return = '';

$avg_yards_per_punt = '';
?>