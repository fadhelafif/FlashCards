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
 * Description of Control
 *
 * @author Rei Ichimaru (市丸 零) <jms21maru@gmail.com>
 */
class Control {

    private $handle = array(); // data or modules handler
    private static $CI; // reference to CI object

    function __construct() {
        self::init();
        $this->CI = & get_instance(); // copy CI object
        $this->CI->load->module_path('modules'); // set the location of our modules
    }

    function putData($key, $data) { // to put data in request
        $merge[$key] = $data;
        $this->handle = array_merge($this->handle, $merge);
    }

    function putView($module) { // to view module in application
        $this->CI->load->module($module);
        $moduleController = $module . '_controller';
        $data = self::getData();
        $merge[$module] = $this->CI->$module->controller->$moduleController->index($data);
        $this->handle = array_merge($this->handle, $merge);
    }

    function putModules($key, $module) { // to put modules in application
        $merge[$key . '_modules'] = $module;
        $this->handle = array_merge($this->handle, $merge);
    }

    function putModule($key, $module) { // to put module in another module
        $this->CI->load->module($module);
        $moduleController = $module . '_controller';
        $data = self::getData();
        $this->handle[$key . '_module'] .= $this->CI->$module->controller->$moduleController->index($data);
    }

    function copyData($data, $module = NULL) { // copy data handler
        $this->handle = $data;

        if ($module != NULL) {
            $merge[$module . '_module'] = '';
            $this->handle = array_merge($this->handle, $merge);
        }
    }

    function getData($key = NULL) { // get all data or specific modules
        return ($key == NULL) ? $this->handle : $this->handle[$key . '_modules'];
    }

    private function init() { // default value for data
        $this->handle = array(
            'search' => '',
            'copyright' => '&copy; 2013 Tim KAWAN.',
            'title' => 'Flash Card',
            'description' => 'Flash Card',
            'author' => 'Fadhel Afif & Rei Ichimaru (市丸 零)'
        );
    }

}

/* End of file Control.php */