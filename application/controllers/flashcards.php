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
class FlashCards extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->module_path('modules'); // set the location of our modules
    }

    /*
     * default call
     */

    public function index() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('profile','subscription', 'recent_fc'));
        $this->control->putModules('top_sidebar', array('announcement'));
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/index', $this->control->getData()); // view page
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
        $this->control->putModules('sidebar', array('profile', 'subscription', 'recent_fc'));
        $this->control->putModules('top_sidebar', array('complete_profile'));
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/dashboard', $this->control->getData()); // view page
    }

    /*
     * Portfolio
     */

    public function portfolio() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('profile', 'subscription', 'recent_fc'));
        $this->control->putModules('top_sidebar', array('complete_profile'));
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/portfolio', $this->control->getData()); // view page
    }

    /*
     * Profile
     */

    public function profile() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('profile', 'subscription', 'recent_fc'));
        $this->control->putModules('top_sidebar', array('complete_profile'));
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/profile', $this->control->getData()); // view page
    }

    /* 
     * flashcards detail
     */

    public function detail(){

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;  

        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('fc_author', 'related_fc', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');

        $this->load->view('flashcards/detail', $this->control->getData()); // view page
    }

    /*
     * play
     */

    public function play() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('fc_detail', 'related_fc', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/play', $this->control->getData()); // view page
    }

    /*
     * Add to desk
     */

    public function add_to_desk() {

        redirect(site_url('john-doe/test/play'));
    }

    /*
     * settings
     */

    public function settings() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('fc_detail', 'related_fc', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/settings', $this->control->getData()); // view page
    }

    /*
     * Add
     */

    public function add() {

        $segments = $this->uri->rsegments;

        // echo '<pre>'; var_dump($segments); die;    


        $this->control->putData('search', 'Modules Done'); // put data to request
        /*
         * put modules to application
         */
        $this->control->putModules('header_sidebar', array('search'));
        $this->control->putModules('sidebar', array('profile','subscription', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/add', $this->control->getData()); // view page
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
        $this->control->putModules('sidebar', array('tag_fc', 'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        $this->load->view('flashcards/explore', $this->control->getData()); // view page
    }

    function _remap() {

        $segments = $this->uri->segments;

        if(count($segments) == 0){
            $this->index();
        }
        elseif(count($segments) == 1){

            if($segments[1] == 'explore'){
                $this->explore();
            }
            else{
                $this->dashboard();
            }            
        }
        elseif(count($segments) == 2){  

            if($segments[2] == 'new'){
                $this->add();
            }
            elseif($segments[2] == 'portfolio'){
                $this->portfolio();
            }
            elseif($segments[2] == 'profile'){
                $this->profile();
            }
            else{
                $this->detail();
            }
        }
        elseif(count($segments) == 3){  
            if($segments[3] == 'play'){
                $this->play();
            }            
            elseif($segments[3] == 'add-to-desk'){
                $this->add_to_desk();
            }            
            elseif($segments[3] == 'settings'){
                $this->settings();
            }
            else{
                show_404();
            }
        }

        // echo '<pre>'; var_dump($segments); die;   

    }

}

/* End of file flashcards.php */