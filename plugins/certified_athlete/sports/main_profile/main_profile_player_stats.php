<?php

/**
 * Certified Athlete  
 * www.certifiedathlete.com
 *
 * LICENSE
 *
 * This source file is subject to the GPL license that is bundled
 * with this package in the file LICENSE.txt.
 *
 * @package    CertifiedAthlete
 * @copyright  Copyright (c) 2008 through 2012, Cas Valentine
 * @license    http://www.gnu.org/licenses/gpl.txt     GPL  
 */
//This appears at the beginning of every class...
/**
 * A class that is treated as the bi-direction proxy of client. Through this class,
 * others can get client form inputs, redraw client form or call client javascript functions.
 *  
 * @author     Cas Valentine <casuall.valentino@gmail.com>
 * @version    1.0 02/20/2012  
 */
//include files to match the sports table
// how do i save and refresh the page without getting the headers already sent error
//$query_values = $_POST;


//ca_game_type = 'regular_season','conference_game','season_average','playoff_game','championship_game','championship_series','exhibition_game','preseason_game','event','general_event','meet','tournament'

global $wpdb;
$query_values = array(
    'id' => CA_Security::clean_text_number_only($wpdb->escape($_REQUEST['player_stats_id'])),
    'ca_athlete_id' => CA_Security::clean_text_number_only($wpdb->escape($_REQUEST['player_id'])),
    'ca_event_id' => CA_Security::clean_text_number_only($wpdb->escape($_REQUEST['event_id'])),
    'ca_team_id' => CA_Security::clean_text_number_only($wpdb->escape($_REQUEST['team_id'])),
    'pass_completions' => CA_Security::clean_text($wpdb->escape($_REQUEST['pass_completions'])),
    'pass_attempts' => CA_Security::clean_text($wpdb->escape($_REQUEST['pass_attempts'])),
    'pass_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['pass_yards'])),
    'pass_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['pass_touchdowns'])),
    'pass_interceptions' => CA_Security::clean_text($wpdb->escape($_REQUEST['pass_interceptions'])),
    'rush_attempts' => CA_Security::clean_text($wpdb->escape($_REQUEST['rush_attempts'])),
    'rush_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['rush_yards'])), //calculate rush avg
    'rush_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['rush_touchdowns'])),
    'receptions' => CA_Security::clean_text($wpdb->escape($_REQUEST['receptions'])),
    'reception_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['reception_yards'])), //calculate yds per catch
    'reception_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['reception_touchdowns'])),
    'field_goal_attempts' => CA_Security::clean_text($wpdb->escape($_REQUEST['field_goal_attempts'])),
    'field_goals_made' => CA_Security::clean_text($wpdb->escape($_REQUEST['field_goals_made'])),
    'extra_points_kicked' => CA_Security::clean_text($wpdb->escape($_REQUEST['extra_points_kicked'])),
    'two_point_conversions' => CA_Security::clean_text($wpdb->escape($_REQUEST['two_point_conversions'])),
    'total_tackles' => CA_Security::clean_text($wpdb->escape($_REQUEST['total_tackles'])),
    'solo_tackles' => CA_Security::clean_text($wpdb->escape($_REQUEST['solo_tackles'])),
    'assisted_tackles' => CA_Security::clean_text($wpdb->escape($_REQUEST['assisted_tackles'])),
    'sacks' => CA_Security::clean_text($wpdb->escape($_REQUEST['sacks'])),
    'forced_fumbles' => CA_Security::clean_text($wpdb->escape($_REQUEST['forced_fumbles'])),
    'fumble_recoveries' => CA_Security::clean_text($wpdb->escape($_REQUEST['fumble_recoveries'])),
    'interceptions' => CA_Security::clean_text($wpdb->escape($_REQUEST['interceptions'])),
    'interception_return_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['interception_return_yards'])),
    'interception_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['interception_touchdowns'])),
    'kickoff_returns' => CA_Security::clean_text($wpdb->escape($_REQUEST['kickoff_returns'])),
    'kickoff_return_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['kickoff_return_yards'])), //calculate return avg
    'kickoff_return_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['kickoff_return_touchdowns'])),
    'punt_returns' => CA_Security::clean_text($wpdb->escape($_REQUEST['punt_returns'])),
    'punt_return_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['punt_return_yards'])), //calculate punt return avg
    'punt_return_touchdowns' => CA_Security::clean_text($wpdb->escape($_REQUEST['punt_return_touchdowns'])),
    'kickoffs' => CA_Security::clean_text($wpdb->escape($_REQUEST['kickoffs'])),
    'touchbacks_kicked' => CA_Security::clean_text($wpdb->escape($_REQUEST['touchbacks_kicked'])),
    'punts' => CA_Security::clean_text($wpdb->escape($_REQUEST['punts'])),
    'punt_yards' => CA_Security::clean_text($wpdb->escape($_REQUEST['punt_yards'])),
    //'avg_punt_distance' 			    => 		CA_Security::clean_text($_POST['avg_punt_distance']),
    'longest_punt' => CA_Security::clean_text($wpdb->escape($_REQUEST['longest_punt'])),
    'blocked_field_goals' => CA_Security::clean_text($wpdb->escape($_REQUEST['blocked_field_goals'])),
    'blocked_punts' => CA_Security::clean_text($wpdb->escape($_REQUEST['blocked_punts'])),
    'game_comment' => CA_Security::clean_freetext($wpdb->escape($_REQUEST['game_comment'])),
        //'text' 	                        => 		CA_Security::clean_text($_POST['text']),
);
//print_r($query_values);
?>