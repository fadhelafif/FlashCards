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
 * @property Data $data generate data
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
        // self::_activateHeader(); // activate header module
        // self::_activateContentSide(); // activate sidebar module
        // self::_activateFooter(); // activate footer module

        $data = array(
                'search' => 'Flash',
                'menu_actived' => 'home',
                'header_sidebar_modules' => array('search'),
                // 'header_sidebar_modules' => array(),
                'sidebar_modules' => array('profile', 'recentfc'),
                // 'sidebar_modules' => array('recentfc', 'profile'),
                // 'top_sidebar_modules' => array('announcement'),
                // 'top_sidebar_modules' => array('complete_profile'),
                'top_sidebar_modules' => array('announcement', 'complete_profile'),
        );

        $this->load->module('header');
        $data['header'] = $this->header->controller->header_controller->index($data);  

        $this->load->module('sidebar');
        $data['sidebar'] = $this->sidebar->controller->sidebar_controller->index($data);

        $this->load->module('top_sidebar');
        $data['top_sidebar'] = $this->top_sidebar->controller->top_sidebar_controller->index($data);

        $this->load->module('footer');
        $data['footer'] = $this->footer->controller->footer_controller->index($data); 

        $this->load->view('home', $data);


    }

    /*
     * activate sidebar module
     */

    private function _activateContentSide() {
        $this->load->module('sidebar');
        $this->data->placeModule('sidebar', $this->sidebar->controller->sidebar_controller->index($this->data->getData()));
        $this->load->view('home', $this->data->getModules());
    }

    /*
     * activate header module
     */

    private function _activateHeader() {
        $this->load->module('header');
        $this->data->headerInit('search', 'Flash');
        $this->data->headerInit('menu_actived', 'Contact');
        $this->header->controller->header_controller->index($this->data->getData());
    }

    /*
     * activate footer module
     */

    private function _activateFooter() {
        $this->load->module('footer');
        $this->data->footerInit('copyright', 'Golongan anak gaul');
        $this->footer->controller->footer_controller->index($this->data->getData());
    }

}

/* End of file flashcards.php */