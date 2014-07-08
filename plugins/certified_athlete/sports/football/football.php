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
class football extends Model {
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////                    attributes                       //////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * The id of the object as it exists in the datbase
     * @var id
     */
    protected $id = '';

    /**
     * an array that holds all of the values/attributes for the object
     * this makes it very easy to update the object and add more fields
     * @var fields
     */
    protected $fields = array();

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////                   standard methods                  //////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * constructs the object
     *
     * 
     */
    public function __construct() {
        parent::__construct();
        //echo 'we are in index!';
    }

    /**
     * get a value from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function get_field($name) {
        
    }

    /**
     * set a value in the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function set_field($name) {
        
    }

    /**
     * get the entire record from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function get_record($id, $table) {
        
    }

    /**
     * inserts a new record or updates and existing record into the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function save_record() {
        
    }

    /**
     * delete the entire record from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function delete_record($id, $table) {
        
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////                  custom methods                     //////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    // any custom methods that a new class requires

    /**
     * get a value from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function save_stats() {//sets the variables from post array then saves
        $query_values = array(
            'id' => CA_Security::clean_text_number_only($_POST['player_stats_id']),
            'ca_athlete_id' => CA_Security::clean_text_number_only($_POST['player_id']),
            'ca_event_id' => CA_Security::clean_text_number_only($_POST['game_id']),
            'ca_team_id' => CA_Security::clean_text_number_only($_POST['team_id']),
            'pass_completions' => CA_Security::clean_text($_POST['pass_completions']),
            'pass_attempts' => CA_Security::clean_text($_POST['pass_attempts']),
            'pass_yards' => CA_Security::clean_text($_POST['pass_yards']),
            'pass_touchdowns' => CA_Security::clean_text($_POST['pass_touchdowns']),
            'pass_interceptions' => CA_Security::clean_text($_POST['pass_interceptions']),
            'rush_attempts' => CA_Security::clean_text($_POST['rush_attempts']),
            'rush_yards' => CA_Security::clean_text($_POST['rush_yards']), //calculate rush avg
            'rush_touchdowns' => CA_Security::clean_text($_POST['rush_touchdowns']),
            'receptions' => CA_Security::clean_text($_POST['receptions']),
            'reception_yards' => CA_Security::clean_text($_POST['reception_yards']), //calculate yds per catch
            'reception_touchdowns' => CA_Security::clean_text($_POST['reception_touchdowns']),
            'field_goal_attempts' => CA_Security::clean_text($_POST['field_goal_attempts']),
            'field_goals_made' => CA_Security::clean_text($_POST['field_goals_made']),
            'extra_points_kicked' => CA_Security::clean_text($_POST['extra_points_kicked']),
            'two_point_conversions' => CA_Security::clean_text($_POST['two_point_conversions']),
            'total_tackles' => CA_Security::clean_text($_POST['total_tackles']),
            'solo_tackles' => CA_Security::clean_text($_POST['solo_tackles']),
            'assisted_tackles' => CA_Security::clean_text($_POST['assisted_tackles']),
            'sacks' => CA_Security::clean_text($_POST['sacks']),
            'forced_fumbles' => CA_Security::clean_text($_POST['forced_fumbles']),
            'fumble_recoveries' => CA_Security::clean_text($_POST['fumble_recoveries']),
            'interceptions' => CA_Security::clean_text($_POST['interceptions']),
            'interception_return_yards' => CA_Security::clean_text($_POST['interception_return_yards']),
            'interception_touchdowns' => CA_Security::clean_text($_POST['interception_touchdowns']),
            'kickoff_returns' => CA_Security::clean_text($_POST['kickoff_returns']),
            'kickoff_return_yards' => CA_Security::clean_text($_POST['kickoff_return_yards']), //calculate return avg
            'kickoff_return_touchdowns' => CA_Security::clean_text($_POST['kickoff_return_touchdowns']),
            'punt_returns' => CA_Security::clean_text($_POST['punt_returns']),
            'punt_return_yards' => CA_Security::clean_text($_POST['punt_return_yards']), //calculate punt return avg
            'punt_return_touchdowns' => CA_Security::clean_text($_POST['punt_return_touchdowns']),
            'kickoffs' => CA_Security::clean_text($_POST['kickoffs']),
            'touchbacks_kicked' => CA_Security::clean_text($_POST['touchbacks_kicked']),
            'punts' => CA_Security::clean_text($_POST['punts']),
            'punt_yards' => CA_Security::clean_text($_POST['punt_yards']),
            //'avg_punt_distance' 			    => 		CA_Security::clean_text($_POST['avg_punt_distance']),
            'longest_punt' => CA_Security::clean_text($_POST['longest_punt']),
            'blocked_field_goals' => CA_Security::clean_text($_POST['blocked_field_goals']),
            'blocked_punts' => CA_Security::clean_text($_POST['blocked_punts']),
            'game_comment' => CA_Security::clean_freetext($_POST['game_comment']),
                //'text' 	                        => 		CA_Security::clean_text($_POST['text']),
        );
        $where_string = array('id' => $_POST['player_stats_id']);

        /* print_r($query_values); */
        print_r($_POST);

        $this->db->save($table_name, $query_values, $where_string);
    }

    /**
     * set a value in the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function display_stats_form() {


        /////////////////////////////////////////////////////////////////////////////////////////////////////////////				
/////////////////////////////               Include Sports Forms                     ////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

        include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/Certified_Athlete/certified-athlete/ca_sports/' . $sports_table . '/' . $sports_table . '_player_stats.php';

/////////////////////////////////////////////////////////////////////////////////////////////////////////////				
/////////////////////////////              Include Sports Forms                      ////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
    }

    /**
     * get the entire record from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function get_record($id, $table) {
        
    }

    /**
     * inserts a new record or updates and existing record into the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function save_record() {
        
    }

    /**
     * delete the entire record from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function delete_record($id, $table) {
        
    }

}
