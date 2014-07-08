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



$team_name = $stat_array->team_name;
$team_record = $stat_array->team_record; //make this an array created by sheer math
$game_date = $stat_array->game_date;
$game_date = date("M-d-Y", strtotime($game_date)); //format game date
$opponent = $stat_array->opponent;
$opponent_record = $stat_array->opponent_record;
$opponent_score = $stat_array->opponent_score;
$team_score = $stat_array->team_score;
if ($opponent_score > $team_score) {
    $losses = 1;
    $win_or_loss = "Loss";
} elseif ($opponent_score < $team_score) {
    $wins = 1;
    $win_or_loss = "Win";
} else {
    $ties = 1;
    $win_or_loss = "Tie";
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


$game_stat1_total = $game_stat1_total + $game_stat1;
$game_stat2_total = $game_stat2_total + $game_stat2;
$game_stat3_total = $game_stat3_total + $game_stat3;
$game_stat4_total = $game_stat4_total + $game_stat4;
$game_stat5_total = $game_stat5_total + $game_stat5;
$game_stat6_total = $game_stat6_total + $game_stat6;
$game_stat7_total = $game_stat7_total + $game_stat7;
$game_stat8_total = $game_stat8_total + $game_stat8;
$game_stat9_total = $game_stat9_total + $game_stat9;
$game_stat10_total = $game_stat10_total + $game_stat10;
$game_stat11_total = $game_stat11_total + $game_stat11;
$game_stat12_total = $game_stat12_total + $game_stat12;
$game_stat13_total = $game_stat13_total + $game_stat13;
$game_stat14_total = $game_stat14_total + $game_stat14;
$game_stat15_total = $game_stat15_total + $game_stat15;
$game_stat16_total = $game_stat16_total + $game_stat16;
$game_stat17_total = $game_stat17_total + $game_stat17;
$game_stat18_total = $game_stat18_total + $game_stat18;
$game_stat19_total = $game_stat19_total + $game_stat19;
$game_stat20_total = $game_stat20_total + $game_stat20;
$game_stat21_total = $game_stat21_total + $game_stat21;
$game_stat22_total = $game_stat22_total + $game_stat22;
$game_stat23_total = $game_stat23_total + $game_stat23;
$game_stat24_total = $game_stat24_total + $game_stat24;
$game_stat25_total = $game_stat25_total + $game_stat25;
$game_stat26_total = $game_stat26_total + $game_stat26;
$game_stat27_total = $game_stat27_total + $game_stat27;
$game_stat28_total = $game_stat28_total + $game_stat28;
$game_stat29_total = $game_stat29_total + $game_stat29;
$game_stat30_total = $game_stat30_total + $game_stat30;
$game_stat31_total = $game_stat31_total + $game_stat31;
$game_stat33_total = $game_stat33_total + $game_stat33;
$game_stat34_total = $game_stat34_total + $game_stat34;
$game_stat35_total = $game_stat35_total + $game_stat35;

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

$season_schedule.="
                    <tr>	
                        <td width=\"400\"> 
                        " . $game_date . " 
                        &nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp; 
                        " . $opponent . " " . $opponent_record .
                        " Result : " . $opponent_score . " - 
                        " . $team_score . " (" . $win_or_loss . ") </td>
                    </tr>	
						
                ";

if ($_SESSION['logged_in_id'] == $stat_array->player_id) {

    $content_slider_stats.="							
                            <!-- We will work on our stats table below -->                            
                            <div class=\"box_heading dark_grey boxHeader\">
                                <a href=\"#\" onclick=\"return false\" title='" . $sports_table . "_player_stat_content" . $stats_i . "');\">
                                <h2>" . $game_date . " 
                                    &nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp;
                                    " . $opponent . " " . $opponent_record .
            " Result : " . $opponent_score . " - " . $team_score . " (" . $win_or_loss . ")</h2>
                                </a>
                                </div>							
                            <div class=\"editBox box_content\" id=\"" . $sports_table . "_player_stat_content" . $stats_i . "\" style=\"" . $display_flag . "\">
                            <div id=\"" . $sports_table . "_status_" . $stats_i . "\"></div>
";





    $content_slider_stats.="                                                       

                            <form id=\"" . $sports_table . "_stat_form_" . $stats_i . "\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">	  					 
						
<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Pass Offense<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">

            <tr>    
                <td>&nbsp;Pass Completions</td>
                <td>&nbsp;Pass Attempts</td>
                <td>&nbsp;Pass Yds</td>
                <td>&nbsp;Pass TD</td>
                <td>&nbsp;Pass Int</td>
            </tr>
            <tr>
                <td width=\"6%\"><input name=\"pass_completions\" type=\"text\" class=\"formFields\" id=\"pass_completions\" value=\"" . $pass_completions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"pass_attempts\" type=\"text\" class=\"formFields\" id=\"pass_attempts\" value=\"" . $pass_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"pass_yards\" type=\"text\" class=\"formFields\" id=\"pass_yards\" value=\"" . $pass_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"pass_touchdowns\" type=\"text\" class=\"formFields\" id=\"pass_touchdowns\" value=\"" . $pass_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"pass_interceptions\" type=\"text\" class=\"formFields\" id=\"pass_interceptions\" value=\"" . $pass_interceptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>

            </tr>	                                                        


    </table>

</div>



<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Rush Offense<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">


        <tr>  							
                <td>&nbsp;Rush Attempts</td>
                <td>&nbsp;Rush Yds</td>								  
                <td>&nbsp;Rush Avg</td>
                <td>&nbsp;Rush TD</td>
        </tr>
        <tr>
                <td width=\"6%\"><input name=\"rush_attempts\" type=\"text\" class=\"formFields\" id=\"rush_attempts\" value=\"" . $rush_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"rush_yards\" type=\"text\" class=\"formFields\" id=\"rush_yards\" value=\"" . $rush_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\" id=\"rush_per_carry\">" . $rush_per_carry . "</td>								  
                <td width=\"6%\"><input name=\"rush_touchdowns\" type=\"text\" class=\"formFields\" id=\"rush_touchdowns\" value=\"" . $rush_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>                                                        


    </table>

</div>





<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Receiving<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">

        <tr>
                <td>&nbsp;Rec</td>
                <td>&nbsp;Rec Yds</td>
                <td>&nbsp;Rec Avg per Catch</td>
                <td>&nbsp;Rec TDs</td>	  
        </tr>

        <tr>	
                <td width=\"6%\"><input name=\"receptions\" type=\"text\" class=\"formFields\" id=\"receptions\" value=\"" . $receptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"reception_yards\" type=\"text\" class=\"formFields\" id=\"reception_yards\" value=\"" . $reception_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\" id=\"reception_yards_per_catch\">" . $reception_yards_per_catch . "</td>
                <td width=\"6%\"><input name=\"reception_touchdowns\" type=\"text\" class=\"formFields\" id=\"reception_touchdowns\" value=\"" . $reception_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>

        </tr>

    </table>

</div>





<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Other Offense<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">
        <tr>
            <td>&nbsp;Field Goal Attempts</td>
            <td>&nbsp;Field Goals Made</td>
            <td>&nbsp;Xtra Points Kicked</td>
            <td>&nbsp;Two Point conversions</td>	  
        </tr>
        <tr>
            <td width=\"6%\"><input name=\"field_goal_attempts\" type=\"text\" class=\"formFields\" id=\"field_goal_attempts\" value=\"" . $field_goal_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td width=\"6%\"><input name=\"field_goals_made\" type=\"text\" class=\"formFields\" id=\"field_goals_made\" value=\"" . $field_goals_made . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td width=\"6%\"><input name=\"extra_points_kicked\" type=\"text\" class=\"formFields\" id=\"extra_points_kicked\" value=\"" . $extra_points_kicked . "\" maxlength=\"10\"  size=\"6%\" /> </td>
            <td width=\"6%\"><input name=\"two_point_conversions\" type=\"text\" class=\"formFields\" id=\"two_point_conversions\" value=\"" . $two_point_conversions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
    </table>

</div>







<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Defense<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">

        <tr>								  
                <td>&nbsp;Tackles</td>
                <td>&nbsp;Solo</td>
                <td>&nbsp;Asst</td>
                <td>&nbsp;Sacks</td>
                <td>&nbsp;Forced Fumbles</td>
                <td>&nbsp;Fumble Recoveries</td>
                <td>&nbsp;Int</td>
                <td>&nbsp;Int Return Yds</td>
                <td>&nbsp;Int for TD</td>
        </tr>
        <tr>
                <td width=\"6%\"><input name=\"total_tackles\" type=\"text\" class=\"formFields\" id=\"total_tackles\" value=\"" . $total_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"solo_tackles\" type=\"text\" class=\"formFields\" id=\"solo_tackles\" value=\"" . $solo_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"assisted_tackles\" type=\"text\" class=\"formFields\" id=\"assisted_tackles\" value=\"" . $assisted_tackles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"sacks\" type=\"text\" class=\"formFields\" id=\"sacks\" value=\"" . $sacks . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"forced_fumbles\" type=\"text\" class=\"formFields\" id=\"forced_fumbles\" value=\"" . $forced_fumbles . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"fumble_recoveries\" type=\"text\" class=\"formFields\" id=\"fumble_recoveries\" value=\"" . $fumble_recoveries . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"interceptions\" type=\"text\" class=\"formFields\" id=\"interceptions\" value=\"" . $interceptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"interception_return_yards\" type=\"text\" class=\"formFields\" id=\"interception_return_yards\" value=\"" . $interception_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"interception_touchdowns\" type=\"text\" class=\"formFields\" id=\"interception_touchdowns\" value=\"" . $interception_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>

    </table>


</div>




<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Special Teams<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">

        <tr>							  
                <td>&nbsp;K Return</td>
                <td>&nbsp;K Return Yds</td>
                <td>&nbsp;K Return Avg</td>
                <td>&nbsp;K Return TDs</td>
                <td>&nbsp;P Return</td>	
                <td>&nbsp;P Return Yds</td>
                <td>&nbsp;P Return Avg</td>
                <td>&nbsp;P Return TDs</td>
        </tr>
        <tr>
                <td width=\"6%\"><input name=\"kickoff_returns\" type=\"text\" class=\"formFields\" id=\"kickoff_returns\" value=\"" . $kickoff_returns . "\" maxlength=\"10\"  size=\"6%\" /> </td>							
                <td width=\"6%\"><input name=\"kickoff_return_yards\" type=\"text\" class=\"formFields\" id=\"kickoff_return_yards\" value=\"" . $kickoff_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\" id=\"avg_kick_return\">" . $avg_kick_return . "</td>
                <td width=\"6%\"><input name=\"kickoff_return_touchdowns\" type=\"text\" class=\"formFields\" id=\"kickoff_return_touchdowns\" value=\"" . $kickoff_return_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"punt_returns\" type=\"text\" class=\"formFields\" id=\"punt_returns\" value=\"" . $punt_returns . "\" maxlength=\"10\"  size=\"6%\" /> </td>							
                <td width=\"6%\"><input name=\"punt_return_yards\" type=\"text\" class=\"formFields\" id=\"punt_return_yards\" value=\"" . $punt_return_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\" id=\"avg_punt_return\">" . $avg_punt_return . "</td>
                <td width=\"6%\"><input name=\"punt_return_touchdowns\" type=\"text\" class=\"formFields\" id=\"punt_return_touchdowns\" value=\"" . $punt_return_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
        <tr>
                <td>&nbsp;Kickoffs</td>
                <td>&nbsp;Touchbacks kicked</td>
                <td>&nbsp;Punts</td>
                <td>&nbsp;Punt Yards</td>
                <td>&nbsp;Avg Punt Distance</td>	
                <td>&nbsp;Longest Punt</td>								  
                <td>&nbsp;Blocked Field Goals</td>
                <td>&nbsp;Blocked Punts</td>
        </tr>
        <tr>	
                <td width=\"6%\"><input name=\"kickoffs\" type=\"text\" class=\"formFields\" id=\"kickoffs\" value=\"" . $kickoffs . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"touchbacks_kicked\" type=\"text\" class=\"formFields\" id=\"touchbacks_kicked\" value=\"" . $touchbacks_kicked . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"punts\" type=\"text\" class=\"formFields\" id=\"punts\" value=\"" . $punts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"punt_yards\" type=\"text\" class=\"formFields\" id=\"punt_yards\" value=\"" . $punt_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\" id=\"avg_yards_per_punt\">" . $avg_yards_per_punt . "</td>

                <td width=\"6%\"><input name=\"longest_punt\" type=\"text\" class=\"formFields\" id=\"longest_punt\" value=\"" . $longest_punt . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"blocked_field_goals\" type=\"text\" class=\"formFields\" id=\"blocked_field_goals\" value=\"" . $blocked_field_goals . "\" maxlength=\"10\"  size=\"6%\" /> </td>
                <td width=\"6%\"><input name=\"blocked_punts\" type=\"text\" class=\"formFields\" id=\"blocked_punts\" value=\"" . $blocked_punts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
        </tr>
        
    </table>

</div>


<div class=\"box_heading box_heading_margin green\">

    <h3>&nbsp;Game Comment<h3/>

</div>
<div class=\"box_content\">

    <table width=\"100%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">

        <tr>
            <td colspan=\"6\" valign=\"top\">Comment (How did you do this game?)<br /><textarea name=\"game_comment\" cols=\"\" rows=\"3\" class=\"formFields\" size=\"50%\" style=\"width:80%;\">" . $comment . "</textarea></td>
            <td width=\"56\" valign=\"top\"><input class=\"btnUpdate\" name=\"btnUpdate\" type=\"submit\" id=\"btnUpdate\" value=\"Update\" />

            <input name=\"player_stats_id\" type=\"hidden\" id=\"" . $player_stats_id . "\" value=\"" . $player_stats_id . "\" />
            <input name=\"player_id\" type=\"hidden\" id=\"" . $player_id . "\" value=\"" . $player_id . "\" />
            <input name=\"sports_table\" type=\"hidden\" id=\"" . $sports_table . "\" value=\"" . $sports_table . "\" />
            <input name=\"edit_function\" type=\"hidden\" id=\"sports_stats\" value=\"sports_stats\" />
            <input name=\"action\" type=\"hidden\" id=\"edit_sports_stats\"\" value=\"edit_sports_stats\" />
            <input name=\"stats_i\" type=\"hidden\" id=\"" . $stats_i . "\" value=\"" . $stats_i . "\" />
        </tr>

    </table>

</div>



  						  

        </form>

</div>
<!-- End Edit Box -->
					  
							
							
							
							<br /><br />
						";
} else {


    $content_slider_stats.="						
														
							
            <!-- We will work on our stats table below -->


            <!-- Begin Edit Box -->
                    <div class=\"boxHeader\">
                <a href=\"#\" onclick=\"return false\" onmousedown=\"javascript:toggleSlideBox('" . $sports_table . "_player_stat_content" . $stats_i . "');\">
                <img src=\"images/toggleBtn1.png\" alt=\"Toggle\" width=\"22\" height=\"30\" border=\"0\" style=\"position:relative; top:6px;\" /> 

                <h2>" . $game_date . " &nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp; " . $opponent . " " . $opponent_record . " Result : " . $opponent_score . " - " . $team_score . "</h2>

                </a>
                </div>
            <div class=\"editBox\" id=\"" . $sports_table . "_player_stat_content" . $stats_i . "\" style=\"display:none;\">
                <table width=\"80%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\"> 
                    <tr>
                        <td><h3>&nbsp;Offense<h3/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td><h3>&nbsp;Pass<h3/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><h3>&nbsp;Rush</h3></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>    
                        <td>&nbsp;Completions</td>
                        <td>&nbsp;Attempts</td>
                        <td>&nbsp;Yds</td>
                        <td>&nbsp;TD</td>
                        <td>&nbsp;Int</td>
                        <td>&nbsp;Rush Attempts</td>
                        <td>&nbsp;Yds</td>								  
                        <td>&nbsp;Avg</td>
                        <td>&nbsp;TD</td>
                    </tr>
                    <tr>
                        <td width=\"6%\">" . $game_stat1 . "</td>
                        <td width=\"6%\">" . $game_stat2 . "</td>
                        <td width=\"6%\">" . $game_stat3 . "</td>
                        <td width=\"6%\">" . $game_stat4 . "</td>
                        <td width=\"6%\">" . $game_stat5 . "</td>
                        <td width=\"6%\">" . $game_stat6 . "</td>
                        <td width=\"6%\">" . $game_stat7 . "</td>
                        <td width=\"6%\">" . $rush_per_carry . "</td>								  
                        <td width=\"6%\">" . $game_stat8 . "</td>
                    </tr>
                    <tr>
                        <td><h3>&nbsp;Receiving<h3/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td><h3>&nbsp;Other<h3/></td>
                        <td>&nbsp;</td>								  
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;Rec</td>
                        <td>&nbsp;Yds</td>
                        <td>&nbsp;Avg per Catch</td>
                        <td>&nbsp;Reception TDs</td>
                        <td>&nbsp;Field Goal Attempts</td>
                        <td>&nbsp;Field Goals Made</td>
                        <td>&nbsp;Xtra Points Kicked</td>
                        <td>&nbsp;Two Point conversions</td>	  
                    </tr>

                    <tr>	
                        <td width=\"6%\">" . $game_stat9 . "</td>
                        <td width=\"6%\">" . $game_stat10 . "</td>
                        <td width=\"6%\">" . $reception_yards_per_catch . "</td>
                        <td width=\"6%\">" . $game_stat11 . "</td>
                        <td width=\"6%\">" . $game_stat12 . "</td>
                        <td width=\"6%\">" . $game_stat13 . "</td>
                        <td width=\"6%\">" . $game_stat14 . "</td>
                        <td width=\"6%\">" . $game_stat15 . "</td>

                    </tr>

                    <tr>
                        <td colspan=\"6\"><h3>&nbsp;Defense<h3/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>

                    </tr>
                    <tr>								  
                        <td>&nbsp;Tackles</td>
                        <td>&nbsp;Solo</td>
                        <td>&nbsp;Asst</td>
                        <td>&nbsp;Sacks</td>
                        <td>&nbsp;Forced Fumbles</td>
                        <td>&nbsp;Int</td>
                        <td>&nbsp;Int for TD</td>
                    </tr>
                    <tr>
                        <td width=\"6%\">" . $game_stat16 . "</td>
                        <td width=\"6%\">" . $game_stat17 . "</td>
                        <td width=\"6%\">" . $game_stat18 . "</td>
                        <td width=\"6%\">" . $game_stat19 . "</td>
                        <td width=\"6%\">" . $game_stat20 . "</td>
                        <td width=\"6%\">" . $game_stat21 . "</td>
                        <td width=\"6%\">" . $game_stat22 . "</td>
                    </tr>
                    <tr>
                        <td colspan=\"6\"><h3>&nbsp;Special Teams<h3/></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>								  
                    </tr>															
                    <tr>							  
                        <td>&nbsp;K Return</td>
                        <td>&nbsp;K Return Yds</td>
                        <td>&nbsp;K Return Avg</td>
                        <td>&nbsp;K Return TDs</td>
                        <td>&nbsp;P Return</td>	
                        <td>&nbsp;P Return Yds</td>
                        <td>&nbsp;P Return Avg</td>
                        <td>&nbsp;P Return TDs</td>

                    </tr>

                    <tr>
                        <td width=\"6%\">" . $game_stat23 . "</td>								  
                        <td width=\"6%\">" . $game_stat24 . "</td>
                        <td width=\"6%\">" . $avg_kick_return . "</td>
                        <td width=\"6%\">" . $game_stat25 . "</td>
                        <td width=\"6%\">" . $game_stat26 . "</td>								  
                        <td width=\"6%\">" . $game_stat27 . "</td>
                        <td width=\"6%\">" . $avg_punt_return . "</td>
                        <td width=\"6%\">" . $game_stat28 . "</td>
                    </tr>

                    <tr>

                        <td>&nbsp;Touchbacks kicked</td>
                        <td>&nbsp;Punts</td>
                        <td>&nbsp;Punt Yards</td>
                        <td>&nbsp;Avg Punt Distance</td>	
                        <td>&nbsp;Longest Punt</td>								  
                        <td>&nbsp;Blocked Field Goals</td>
                        <td>&nbsp;Blocked Punts</td>


                    </tr>
                    <tr>	
                        <td width=\"6%\">" . $game_stat29 . "</td>
                        <td width=\"6%\">" . $game_stat30 . "</td>
                        <td width=\"6%\">" . $game_stat31 . "</td>								  
                        <td width=\"6%\">" . $avg_yards_per_punt . "</td>
                        <td width=\"6%\">" . $game_stat32 . "</td>
                        <td width=\"6%\">" . $game_stat33 . "</td>
                        <td width=\"6%\">" . $game_stat34 . "</td>
                        <td width=\"6%\">" . $game_stat35 . "</td>
                    </tr>

                        <tr>
                            <td colspan=\"6\" valign=\"top\">Comment <br /> <br />" . $comment . "</td>

                            </tr>

                </table>
            </div>
            <!-- End Edit Box -->


            <br /><br />

            <!-- We will work on our stats table above -->	  

                        ";
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

$content_slider.="
    
        <!-- Begin Edit Box -->
        <!-- Use math to construct stats view -->
                <div class=\"boxHeader\">
            <a href=\"#\" onclick=\"return false\" onmousedown=\"javascript:toggleSlideBox('" . $sports_table . "_player_stat_season_content');\">
            <img src=\"images/toggleBtn1.png\" alt=\"Toggle\" width=\"22\" height=\"30\" border=\"0\" style=\"position:relative; top:6px;\" /> 

            <h2>" . $title . " Season to Date Stats: (" . $total_wins . " Wins - " . $total_losses . " Losses - " . $total_ties . " Ties) </h2>

            </a>
            </div>
        <div class=\"editBox\" id=\"" . $sports_table . "_player_stat_season_content\" style=\"display:none;\">

        <table width=\"80%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\"> 
                <tr>
                    <td><h3>&nbsp;Offense<h3/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><h3>&nbsp;Pass<h3/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><h3>&nbsp;Rush</h3></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>    
                    <td>&nbsp;Completions</td>
                    <td>&nbsp;Attempts</td>
                    <td>&nbsp;Yds</td>
                    <td>&nbsp;TD</td>
                    <td>&nbsp;Int</td>
                    <td>&nbsp;Rush Attempts</td>
                    <td>&nbsp;Yds</td>								  
                    <td>&nbsp;Avg</td>
                    <td>&nbsp;TD</td>
                </tr>
                <tr>
                    <td width=\"6%\">" . $game_stat1_total . "</td>
                    <td width=\"6%\">" . $game_stat2_total . "</td>
                    <td width=\"6%\">" . $game_stat3_total . "</td>
                    <td width=\"6%\">" . $game_stat4_total . "</td>
                    <td width=\"6%\">" . $game_stat5_total . "</td>
                    <td width=\"6%\">" . $game_stat6_total . "</td>
                    <td width=\"6%\">" . $game_stat7_total . "</td>
                    <td width=\"6%\">" . $total_rush_per_carry . "</td>								  
                    <td width=\"6%\">" . $game_stat8_total . "</td>
                </tr>
                <tr>
                    <td><h3>&nbsp;Receiving<h3/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><h3>&nbsp;Other<h3/></td>
                    <td>&nbsp;</td>								  
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;Rec</td>
                    <td>&nbsp;Yds</td>
                    <td>&nbsp;Avg per Catch</td>
                    <td>&nbsp;Reception TDs</td>
                    <td>&nbsp;Field Goal Attempts</td>
                    <td>&nbsp;Field Goals Made</td>
                    <td>&nbsp;Xtra Points Kicked</td>
                    <td>&nbsp;Two Point conversions</td>	  
                </tr>

                <tr>	
                    <td width=\"6%\">" . $game_stat9_total . "</td>
                    <td width=\"6%\">" . $game_stat10_total . "</td>
                    <td width=\"6%\">" . $total_reception_yards_per_catch . "</td>
                    <td width=\"6%\">" . $game_stat11_total . "</td>
                    <td width=\"6%\">" . $game_stat12_total . "</td>
                    <td width=\"6%\">" . $game_stat13_total . "</td>
                    <td width=\"6%\">" . $game_stat14_total . "</td>
                    <td width=\"6%\">" . $game_stat15_total . "</td>

                </tr>

                <tr>
                    <td colspan=\"6\"><h3>&nbsp;Defense<h3/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>

                </tr>
                <tr>								  
                    <td>&nbsp;Tackles</td>
                    <td>&nbsp;Solo</td>
                    <td>&nbsp;Asst</td>
                    <td>&nbsp;Sacks</td>
                    <td>&nbsp;Forced Fumbles</td>
                    <td>&nbsp;Int</td>
                    <td>&nbsp;Int for TD</td>
                </tr>
                <tr>
                    <td width=\"6%\">" . $game_stat16_total . "</td>
                    <td width=\"6%\">" . $game_stat17_total . "</td>
                    <td width=\"6%\">" . $game_stat18_total . "</td>
                    <td width=\"6%\">" . $game_stat19_total . "</td>
                    <td width=\"6%\">" . $game_stat20_total . "</td>
                    <td width=\"6%\">" . $game_stat21_total . "</td>
                    <td width=\"6%\">" . $game_stat22_total . "</td>
                </tr>
                <tr>
                    <td colspan=\"6\"><h3>&nbsp;Special Teams<h3/></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>								  
                </tr>															
                <tr>							  
                    <td>&nbsp;K Return</td>
                    <td>&nbsp;K Return Yds</td>
                    <td>&nbsp;K Return Avg</td>
                    <td>&nbsp;K Return TDs</td>
                    <td>&nbsp;P Return</td>	
                    <td>&nbsp;P Return Yds</td>
                    <td>&nbsp;P Return Avg</td>
                    <td>&nbsp;P Return TDs</td>

                </tr>

                <tr>
                    <td width=\"6%\">" . $game_stat23_total . "</td>								  
                    <td width=\"6%\">" . $game_stat24_total . "</td>
                    <td width=\"6%\">" . $total_avg_kick_return . "</td>
                    <td width=\"6%\">" . $game_stat25_total . "</td>
                    <td width=\"6%\">" . $game_stat26_total . "</td>								  
                    <td width=\"6%\">" . $game_stat27_total . "</td>
                    <td width=\"6%\">" . $total_avg_punt_return . "</td>
                    <td width=\"6%\">" . $game_stat28_total . "</td>
                </tr>

                <tr>

                    <td>&nbsp;Touchbacks kicked</td>
                    <td>&nbsp;Punts</td>
                    <td>&nbsp;Punt Yards</td>
                    <td>&nbsp;Avg Punt Distance</td>	
                    <td>&nbsp;Longest Punt</td>								  
                    <td>&nbsp;Blocked Field Goals</td>
                    <td>&nbsp;Blocked Punts</td>


                </tr>
                <tr>	
                    <td width=\"6%\">" . $game_stat29_total . "</td>
                    <td width=\"6%\">" . $game_stat30_total . "</td>
                    <td width=\"6%\">" . $game_stat31_total . "</td>								  
                    <td width=\"6%\">" . $total_avg_yards_per_punt . "</td>
                    <td width=\"6%\">" . $game_stat32_total . "</td>
                    <td width=\"6%\">" . $game_stat33_total . "</td>
                    <td width=\"6%\">" . $game_stat34_total . "</td>
                    <td width=\"6%\">" . $game_stat35_total . "</td>
                </tr>

                <tr>
                        <td colspan=\"6\" valign=\"top\">Season Comment <br /> <br />" . $comment . "</td>
            </tr>
                <tr>
                        <td colspan=\"6\" valign=\"top\">
                <!-- AddThis Button BEGIN -->
                            <div class=\"addthis_toolbox addthis_default_style 

                            addthis:description=\"" . $comment . "\"
                    addthis:title=\"Awesome Workout!\"


                            \">
                            <a class=\"addthis_button_google_plusone\"/>
                            <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
                            <a class=\"addthis_button_tweet\"></a>
                            <a class=\"addthis_counter addthis_pill_style\"></a>
                            </div>

                        <!-- AddThis Button END -->

                </tr>

            </table>
        </div>
        <!-- End Edit Box -->
        <br /><br />

        " . $content_slider_stats . "

							
<br /> <br />
							
";

echo $content_slider_stats;

$content_slider_stats = ""; //clears this variable for future use in the other tables

$rush_per_carry = ''; //reset variables for loop

$reception_yards_per_catch = '';

$avg_kick_return = '';

$avg_punt_return = '';

$avg_yards_per_punt = '';
?>