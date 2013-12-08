<?php

/*
 * Copyright (C) 2013 Rei Ichimaru (市丸 零) <jms21maru@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */


if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Description of flashcards
 *
 * @author Rei Ichimaru (市丸 零) <jms21maru@gmail.com>
 * @property FC_Loader $load extends CI_Loader
 * @property Control $control data and modules controller
 */
class Blog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module_path('modules'); // set the location of our modules
    }

    /*
     * default call
     */

    public function index() {

        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('tag_blog','recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        
        $this->load->view('blog/index', $this->control->getData()); // view page
    }

    /*
     * Dashboard
     */

    public function dashboard() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('profile', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('blog/dashboard', $this->control->getData()); // view page
    }

    /* 
     * blog detail
     */

    public function detail(){

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;  

        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('fc_author', 'related_blog', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');

        $this->load->view('blog/detail', $this->control->getData()); // view page
    }

    /*
     * Explore
     */

    public function explore() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('tag_blog', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('blog/explore', $this->control->getData()); // view page
    }

    function _remap() {

        $segments = $this->uri->segments; 

        if(count($segments) == 1){
            $this->index();
        }
        elseif(count($segments) == 2){

            if($segments[2] == 'search'){
                $this->search();
            }
            elseif($segments[2] == 'explore'){
                $this->explore();
            }
            else{
                $this->dashboard();
            }            
        }
        elseif(count($segments) == 3){  

            if($segments[3] == 'new'){
                $this->add();
            }
            elseif($segments[3] == 'creation'){
                $this->creation();
            }
            else{
                $this->detail();
            }
        }  

    }
        

}

/* End of file flashcards.php */