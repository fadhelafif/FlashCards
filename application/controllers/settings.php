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
class Settings extends CI_Controller {

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
        $this->control->putModules('sidebar', array('setting' ,'recent_fc'));
        $this->control->putModules('top_sidebar', array());
        /*
         * put view to page
         */
        $this->control->putView('header');
        $this->control->putView('sidebar');
        $this->control->putView('top_sidebar');
        $this->control->putView('footer');
        
        $this->load->view('settings/index', $this->control->getData()); // view page
    }


        

}

/* End of file flashcards.php */