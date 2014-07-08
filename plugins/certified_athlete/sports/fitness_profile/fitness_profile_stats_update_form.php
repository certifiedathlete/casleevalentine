<?php

//////////////////////////////////////////////////////////////////////////////////////////////////////////////				
/////////////////////////////       Sport Specific Code Declarations          /////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
//print_r($stat_array);
$sports_table = CA_Security::clean_text($_POST['sports_table']);
$stats_i = CA_Security::clean_text_number_only($_POST['stats_i']); //pass in the value of the div id
$player_id = CA_Security::clean_text_number_only($_POST['player_id']);
$player_stats_id = CA_Security::clean_text_number_only($_POST['player_stats_id']);

$id = CA_Security::clean_text_number_only($_POST['player_stats_id']);
$ca_athlete_id = CA_Security::clean_text_number_only($_POST['player_id']);
$ca_event_id = CA_Security::clean_text_number_only($_POST['game_id']);
$ca_team_id = CA_Security::clean_text_number_only($_POST['team_id']);
$pass_completions = CA_Security::clean_text($_POST['pass_completions']);
$pass_attempts = CA_Security::clean_text($_POST['pass_attempts']);
$pass_yards = CA_Security::clean_text($_POST['pass_yards']);
$pass_touchdowns = CA_Security::clean_text($_POST['pass_touchdowns']);
$pass_interceptions = CA_Security::clean_text($_POST['pass_interceptions']);
$rush_attempts = CA_Security::clean_text($_POST['rush_attempts']);
$rush_yards = CA_Security::clean_text($_POST['rush_yards']); //calculate rush avg
$rush_touchdowns = CA_Security::clean_text($_POST['rush_touchdowns']);
$receptions = CA_Security::clean_text($_POST['receptions']);
$reception_yards = CA_Security::clean_text($_POST['reception_yards']); //calculate yds per catch
$reception_touchdowns = CA_Security::clean_text($_POST['reception_touchdowns']);
$field_goal_attempts = CA_Security::clean_text($_POST['field_goal_attempts']);
$field_goals_made = CA_Security::clean_text($_POST['field_goals_made']);
$extra_points_kicked = CA_Security::clean_text($_POST['extra_points_kicked']);
$two_point_conversions = CA_Security::clean_text($_POST['two_point_conversions']);
$total_tackles = CA_Security::clean_text($_POST['total_tackles']);
$solo_tackles = CA_Security::clean_text($_POST['solo_tackles']);
$assisted_tackles = CA_Security::clean_text($_POST['assisted_tackles']);
$sacks = CA_Security::clean_text($_POST['sacks']);
$forced_fumbles = CA_Security::clean_text($_POST['forced_fumbles']);
$fumble_recoveries = CA_Security::clean_text($_POST['fumble_recoveries']);
$interceptions = CA_Security::clean_text($_POST['interceptions']);
$interception_return_yards = CA_Security::clean_text($_POST['interception_return_yards']);
$interception_touchdowns = CA_Security::clean_text($_POST['interception_touchdowns']);
$kickoff_returns = CA_Security::clean_text($_POST['kickoff_returns']);
$kickoff_return_yards = CA_Security::clean_text($_POST['kickoff_return_yards']); //calculate return avg
$kickoff_return_touchdowns = CA_Security::clean_text($_POST['kickoff_return_touchdowns']);
$punt_returns = CA_Security::clean_text($_POST['punt_returns']);
$punt_return_yards = CA_Security::clean_text($_POST['punt_return_yards']); //calculate punt return avg
$punt_return_touchdowns = CA_Security::clean_text($_POST['punt_return_touchdowns']);
$kickoffs = CA_Security::clean_text($_POST['kickoffs']);
$touchbacks_kicked = CA_Security::clean_text($_POST['touchbacks_kicked']);
$punts = CA_Security::clean_text($_POST['punts']);
$punt_yards = CA_Security::clean_text($_POST['punt_yards']);
//'avg_punt_distance' 			    => 		CA_Security::clean_text($_POST['avg_punt_distance']),
$longest_punt = CA_Security::clean_text($_POST['longest_punt']);
$blocked_field_goals = CA_Security::clean_text($_POST['blocked_field_goals']);
$blocked_punts = CA_Security::clean_text($_POST['blocked_punts']);
$game_comment = CA_Security::clean_freetext($_POST['game_comment']);
//'text' 	                        => 		CA_Security::clean_text($_POST['text']),





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
								  <td width=\"400\"> " . $game_date . " &nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp; " . $opponent . " " . $opponent_record . " Result : " . $opponent_score . " - " . $team_score . " (" . $win_or_loss . ") </td>
						  </tr>	
						
						";


if (get_current_user_id() == $player_id) {





    $content_slider_stats.="	
							
							<!-- We will work on our stats table below -->
							
							
							<!-- Begin Edit Box http://certifiedathlete.com/wp-content/themes/Certified_Athlete/certified-athlete/ca_controllers/ca_edit_user_profile.php    --> 
                                                        

								<div class=\"boxHeader\">
							  <a href=\"#\" onclick=\"return false\" title='" . $sports_table . "_player_stat_content" . $stats_i . "');\">
							  <img src=\"images/toggleBtn1.png\" alt=\"Toggle\" width=\"22\" height=\"30\" border=\"0\" style=\"position:relative; top:6px;\" /> 
							  
							  <h2>" . $game_date . " &nbsp;&nbsp; vs &nbsp;&nbsp;&nbsp;" . $opponent . " " . $opponent_record . " Result : " . $opponent_score . " - " . $team_score . " (" . $win_or_loss . ")</h2>
							  
							  </a>
							  </div>
							


                                                        <div class=\"editBox\" id=\"" . $sports_table . "_player_stat_content" . $stats_i . "\" style=\"\">
							
							<div id=\"" . $sports_table . "_status_" . $stats_i . "\"></div>
							
							

                                                        

                                                        
							
							
								
							<table width=\"80%\" align=\"center\" cellpadding=\"8\" cellspacing=\"0\" style=\"border:#999 1px solid; background-color:#FBFBFB;\">   
                                                        

							<form id=\"" . $sports_table . "_stat_form_" . $stats_i . "\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">	  					 
							<div class=\"on_div\">		 
	
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
							<td>&nbsp;Pass Completions</td>
							<td>&nbsp;Pass Attempts</td>
							<td>&nbsp;Pass Yds</td>
							<td>&nbsp;Pass TD</td>
							<td>&nbsp;Pass Int</td>
							<td>&nbsp;Rush Attempts</td>
							<td>&nbsp;Rush Yds</td>								  
							<td>&nbsp;Rush Avg</td>
							<td>&nbsp;Rush TD</td>
						  </tr>
						  <tr>
							<td width=\"6%\"><input name=\"pass_completions\" type=\"text\" class=\"formFields\" id=\"pass_completions\" value=\"" . $pass_completions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"pass_attempts\" type=\"text\" class=\"formFields\" id=\"pass_attempts\" value=\"" . $pass_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"pass_yards\" type=\"text\" class=\"formFields\" id=\"pass_yards\" value=\"" . $pass_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"pass_touchdowns\" type=\"text\" class=\"formFields\" id=\"pass_touchdowns\" value=\"" . $pass_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"pass_interceptions\" type=\"text\" class=\"formFields\" id=\"pass_interceptions\" value=\"" . $pass_interceptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"rush_attempts\" type=\"text\" class=\"formFields\" id=\"rush_attempts\" value=\"" . $rush_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"rush_yards\" type=\"text\" class=\"formFields\" id=\"rush_yards\" value=\"" . $rush_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
								  <td width=\"6%\" id=\"rush_per_carry\">" . $rush_per_carry . "</td>								  
						    <td width=\"6%\"><input name=\"rush_touchdowns\" type=\"text\" class=\"formFields\" id=\"rush_touchdowns\" value=\"" . $rush_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
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
							<td>&nbsp;Rec Yds</td>
							<td>&nbsp;Rec Avg per Catch</td>
							<td>&nbsp;Rec TDs</td>
							<td>&nbsp;Field Goal Attempts</td>
							<td>&nbsp;Field Goals Made</td>
							<td>&nbsp;Xtra Points Kicked</td>
							<td>&nbsp;Two Point conversions</td>	  
						  </tr>
						  
						  <tr>	
							<td width=\"6%\"><input name=\"receptions\" type=\"text\" class=\"formFields\" id=\"receptions\" value=\"" . $receptions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
    						<td width=\"6%\"><input name=\"reception_yards\" type=\"text\" class=\"formFields\" id=\"reception_yards\" value=\"" . $reception_yards . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\" id=\"reception_yards_per_catch\">" . $reception_yards_per_catch . "</td>
							<td width=\"6%\"><input name=\"reception_touchdowns\" type=\"text\" class=\"formFields\" id=\"reception_touchdowns\" value=\"" . $reception_touchdowns . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"field_goal_attempts\" type=\"text\" class=\"formFields\" id=\"field_goal_attempts\" value=\"" . $field_goal_attempts . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"field_goals_made\" type=\"text\" class=\"formFields\" id=\"field_goals_made\" value=\"" . $field_goals_made . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"extra_points_kicked\" type=\"text\" class=\"formFields\" id=\"extra_points_kicked\" value=\"" . $extra_points_kicked . "\" maxlength=\"10\"  size=\"6%\" /> </td>
							<td width=\"6%\"><input name=\"two_point_conversions\" type=\"text\" class=\"formFields\" id=\"two_point_conversions\" value=\"" . $two_point_conversions . "\" maxlength=\"10\"  size=\"6%\" /> </td>
						  
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
								  
						  <tr>
							<td colspan=\"6\" valign=\"top\">Comment (How did you do this game?)<br /><textarea name=\"game_comment\" cols=\"\" rows=\"3\" class=\"formFields\" size=\"50%\" style=\"width:80%;\">" . $comment . "</textarea></td>
							<td width=\"56\" valign=\"top\"><input onclick=\"return false\" class=\"btnUpdate\" name=\"btnUpdate\" type=\"submit\" id=\"btnUpdate\" value=\"Update\" />
							    
							  <input name=\"player_stats_id\" type=\"hidden\" id=\"" . $player_stats_id . "\" value=\"" . $player_stats_id . "\" />
							  <input name=\"player_id\" type=\"hidden\" id=\"" . $player_id . "\" value=\"" . $player_id . "\" />
							  <input name=\"sports_table\" type=\"hidden\" id=\"" . $sports_table . "\" value=\"" . $sports_table . "\" />
                                                          <input name=\"edit_function\" type=\"hidden\" id=\"sports_stats\" value=\"sports_stats\" />
                                                          <input name=\"action\" type=\"hidden\" id=\"edit_sports_stats\"\" value=\"edit_sports_stats\" />
                                                          <input name=\"stats_i\" type=\"hidden\" id=\"" . $stats_i . "\" value=\"" . $stats_i . "\" />
							  						  
							  
							</tr>
                                                        </div><!-- End of on_div -->
						  </form>
					  </table>
					  </div>
					  <!-- End Edit Box -->
					  
					<script>$('#" . $sports_table . "_stat_form_" . $stats_i . ").live('submit', ajax_stats_upload);</script>		
							
							
							<br /><br />
						";
}

//$content_slider_stats;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////                                                           /////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>