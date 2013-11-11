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
 * Description of data
 *
 * @author Rei Ichimaru (市丸 零) <jms21maru@gmail.com>
 */
class Data {

    private $data = array(); // data request
    private $module = array(); // module - access from main controller
    private $child = array(); // child module
    private $isChild = FALSE; // check is child module

    /*
     * header module sections
     */

    public function headerInit($key = '', $value = '') {
        self::_initHeader();
        self::_setInit($key, $value);
    }

    private function _initHeader() {
        $data = array(
            'search' => '',
            'menu_actived' => '',
        );
        array_merge($this->data, $data);
    }

    /*
     * footer module sections
     */

    public function footerInit($key = '', $value = '') {
        self::_initFooter();
        self::_setInit($key, $value);
    }

    private function _initFooter() {
        $data = array('copyright' => '');
        array_merge($this->data, $data);
    }

    private function _setInit($key = '', $value = '') { // set data array
        if ($key !== '' and $value !== '') {
            $this->data[$key] = $value;
        }
    }

    public function getData() { // get all data array
        return $this->data;
    }

    /*
     * module handler
     */

    public function placeModule($key, $value, $isChild = FALSE) {
        if ($isChild) {
            $this->child[$key] = $value;
        } else {
            $this->module[$key] = $value;
        }

        $this->isChild = $isChild;
    }

    public function getModules() { // get all modules
        $return = ($this->isChild) ? implode('', $this->child) : implode('', $this->module);
        return array('module' => $return);
    }

}

/* End of file data.php */