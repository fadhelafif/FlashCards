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
 * @author Fadhel Afif
 */
class Top_Sidebar_Controller extends FC_Controller {

    function __construct() {
        parent::__construct();
    }

    /*
     * default call
     */

    function index($data = '') {
        $self = $this->__modulereference;

        $this->data = $data;

        $this->data['top_sidebar_module'] = '';

        foreach($this->data['top_sidebar_modules'] as $top_sidebar_module){
            $controller_name = $top_sidebar_module.'_controller';

            $this->load->module($top_sidebar_module);
            $this->data['top_sidebar_module'] .= $this->$top_sidebar_module->controller->$controller_name->index($data);
        }

        return $this->$self->view('top_sidebar', $this->data, TRUE);
    }

}
