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
class main_profile_rank extends Model {
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
    protected $fields = array(
        'id' => '',
        'player_id' => '',
        'raw_rank' => '',
        'total_rank' => '',
        'position_rank' => '',
        'experience_points' => '',
        'rank_vs_top_pros' => '',
        'rank_vs_top_collegiate' => '',
        'rank_vs_top_preps' => '',
        'rank_vs_top_in_country' => '',
        'rank_vs_top_in_my_region' => '',
        'rank_vs_top_in_my_state' => '',
        'rank_vs_top_in_my_county' => '',
        'rank_vs_top_in_my_city' => '',
        'rank_vs_top_in_my_organization' => '',
        'coaches_rank' => '',
        'recruiters_rank' => '',
        'fans_rank' => '',
        'achievements' => '',
        'badges' => '',
        'id' => '',
        'raw_rank' => '',
        'total_rank' => '',
    );

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
        return $this->db->read($id, $table);
    }

    /**
     * inserts a new record or updates and existing record into the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function save_record() {
        $table_name = $_POST['data'];
        $text = array('text' => Security::clean_text($_POST['text']),
            'id' => Security::clean_text_number_only($_POST['id']),
        );
        $where_string = "`id` = " . $text['id'];

        $this->db->save($table_name, $text, $where_string);
    }

    /**
     * delete the entire record from the database
     *
     * @param string $name - Comments
     * @return string $val - Comments
     */
    public function delete_record($id, $table) {
        $this->db->delete($id, $table);
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////                  custom methods                     //////////////////////////
    ////////////////////////////////////////////////////////////////////////////////////////////////////
    // any custom methods that a new class requires
}
