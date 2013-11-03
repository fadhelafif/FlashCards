<?php

/*
 * Copyright (C) 2013 Rei Ichimaru (市丸 零)
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
 * @author shinzo maru
 */
class FlashCards extends CI_Controller {

    function __construct() {
        parent::__construct();
        // set the location of our modules
        $this->load->module_path('modules');
    }

    public function index() {
        // Activate module
        $this->load->module('header');
        $this->load->module('sidebar');
        $this->load->module('footer');

        $data = array(
            'search' => 'Tidak',
            'menu_actived' => 'home',
        );

        $this->header->controller->header_controller->index($data);

        $data['sidebar'] = $this->sidebar->controller->sidebar_controller->index($data);

        $this->load->view('home', $data);

        $this->footer->controller->footer_controller->index($data);
    }

}

/* End of file flashcards.php */