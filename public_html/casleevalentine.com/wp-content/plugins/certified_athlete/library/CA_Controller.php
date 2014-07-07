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
 * @copyright  Copyright (c) 2008 through 2013, Cas Valentine
 * @license    http://www.gnu.org/licenses/gpl.txt     GPL  
 */

/**
 * This is the parent controller class for certified athlete.  This class will 
 * call the model parent class and its child classes.  It will also render a view by 
 * calling the parent view class and its child classes.
 *  
 * @author     Cas Valentine <casuall.valentino@gmail.com>
 * @version    1.0 02/20/2012  
 */
class CA_Controller {

    //************************************************************************//
    //************              attributes                       *************//
    //************************************************************************//
    protected $model;
    protected $view;

    //************************************************************************//
    //************            standard methods                   *************//
    //************************************************************************//

    /**
     * constructs the controller object
     *
     * 
     */
    public function __construct() {
        $this->model = new CA_Model();
        $this->view = new CA_View();
    }

    //************************************************************************//
    //************               custom methods                  *************//
    //************************************************************************//
    // any custom methods that a new class requires

    /**
     * makes a call to the model object
     *     
     */
    private function instantiate_model() {//script hanging up here 
        //print_r($this->object_variables);
        //echo $this->model_name;
        $model = $this->model_name . '_model';
        $this->model = new $model($this->object_variables);
    }

    /**
     * returns the model object
     *     
     */
    public function get_model() {//script hanging up here 
        return $this->model;
    }

    /**
     * Instantiates the model
     * Retreives all objects to show on an index page
     * Sends the object to be rendered in view
     */
    public function index() {//done
        $this->instantiate_model();
        $all_objects = $this->model->all_objects;
        //print_r($all_objects);
        $this->view->display_index = true;
        $this->render($all_objects);
    }

    /**
     * returns an object containing every model
     * 
     * @return string $all_schools - an object containing every school in the DB
     */
    public function get_all_objects() {//done
        //$this->instantiate_model();
        $this->model = $this->model->get_all_objects(); //ensures that an stdClass object is returned
        return $this->model;
    }

    /**
     * returns all objects from the database
     * 
     * @return string $all_objects - object with every model object listed in it
     */
    public function get_all_objects_without_view_by_field() {
        //need to have an optional call to other funtion to add more fields to the object...
        $this->instantiate_model();
        $this->model = $this->model->get_all_objects_without_view_by_field(); //ensures that an stdClass object is returned
        return $this->model;
        ;
    }

    /**
     * returns all objects from the database
     * 
     * @return string $all_objects - object with every model object listed in it
     */
    public function get_all_objects_by_id() {
        //need to have an optional call to other funtion to add more fields to the object...
        $this->instantiate_model();
        $this->model = $this->model->get_all_objects_by_id(); //ensures that an stdClass object is returned
        //print_r($this->model);

        return $this->model;
    }

    /**
     * returns an object with the requested id from the DB
     *
     * @param string $id - the id of the requested object
     * @return string $object - the school object returned from the DB
     */
    public function get_without_view() {//done
        $this->object_variables['action'] = 'get_object';
        //change the action to return a single object
        $this->instantiate_model();

//        echo'<br><br>The Model in the Controller <br><br>';

        $this->model = $this->model->get_object(); //ensures that an stdClass object is returned
//        print_r($this->model);
//        echo'<br><br>^^^^^^^^The Model in the Controller <br><br>';
        return $this->model;
    }

    /**
     * returns an object with the requested id from the DB
     *
     * @param string $id - the id of the requested school
     * @return string $object - the school object returned from the DB
     */
    public function get_with_view() {//done
        $this->object_variables['action'] = 'get_object';
        //change the action to return a single object
        $this->instantiate_model();

//       echo'<br><br>The Model in the Controller <br><br>';
        $this->model = $this->model->get_object(); //ensures that an stdClass object is returned
//        print_r($this->model);
//        
//        echo'<br><br>^^^^^^The Model in the Controller <br><br>';

        $this->render($this->model);
    }

    /**
     * returns an object with the requested id from the DB
     *
     * @param string $id - the id of the requested object
     * @return string $object - the school object returned from the DB
     */
    public function get_without_view_by_field() {//done
        $this->object_variables['action'] = 'get_object';
        //change the action to return a single object
        $this->instantiate_model();
        return $this->model;
    }

    /**
     * returns an object with the requested id from the DB
     *
     * @param string $id - the id of the requested school
     * @return string $object - the school object returned from the DB
     */
    public function get_with_view_by_field() {//done
        $this->object_variables['action'] = 'get_object';
        //change the action to return a single object
        $this->instantiate_model();
        $this->render($this->model);
    }

    /**
     * returns the filename and extension of an uploaded image
     *
     * @return string $pic_with_extension - filename with extension
     */
    public function save_pic() {

        $this->object_variables['id'] = CA_Security::clean_text($_REQUEST[$this->form_name . '_id']);
        $pic_with_extension = $this->instantiate_model();
        echo '<br>' . $pic_with_extension . '<----- pic with ext and form id is ' . $this->form_name . '_id';
        //$pic_with_extension = $this->model->save_pic();
        return $pic_with_extension;
    }

    /**
     * Saves the object to the DB
     *
     * 
     * @return string $model - returns id of the saved model
     */
    public function save() {
        $this->object_variables['id'] = CA_Security::clean_text($_REQUEST[$this->form_name . '_id']);
        $this->instantiate_model();
        //$this->model = $this->model->save();//actually call the model twice...
        return $this->model;
    }

    /**
     * Saves the object to the DB
     *
     * 
     * @return string $model - returns id of the saved model
     */
    public function save_indirectly() {
        $this->instantiate_model();
        //$this->model = $this->model->save();//actually call the model twice...
        return $this->model;
    }

    /**
     * returns the the veiw for a school object
     *
     * @param string $school_object - The object returned from the model, 
     * used to populate the page variables 
     */
    public function render($object) {//done
        $this->view->page_object = $object;
        //print_r($object);
        //print_r($this->model;        
        $this->view->render($this->view_name);
    }

    //************************************************************************//
    //************               custom methods                  *************//
    //************************************************************************//
    // any custom methods that a new class requires
    //need to write functions to access the functions in the model....
}