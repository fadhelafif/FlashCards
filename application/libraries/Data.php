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

    private $data = array(); // pass data to request
    private $module = array(); // pass module to request
    // module constant, use to load module
    public $HEADER = 'header';
    public $SIDEBAR = 'sidebar';
    public $FOOTER = 'footer';

    public function headerInit($key = '', $value = '') {
        self::_initHeader();

        if ($key !== '' and $value !== '') {
            $this->data[$key] = $value;
        }
    }

    private function _initHeader() {
        $this->data = array(
            'search' => '',
            'menu_actived' => '',
        );
    }

    public function getData() {
        return $this->data;
    }

    public function placeModule($module, $value) {
        self::_initModule();
        $this->module[$module] = $value;
    }

    private function _initModule() {
        $this->module = array(
            'sidebar' => NULL
        );
    }

    public function getModule() {
        return $this->module;
    }

}

/* End of file data.php */