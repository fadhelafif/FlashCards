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
 * ExiteCMS
 *
 * An open source application development framework for PHP 5+
 * ExiteCMS is based on CodeIgniter, Copyright (c) Ellislab Inc.
 *
 * Default model parent class to transparently support both CI 1.7.2 and 2.0
 *
 * @package		ExiteCMS
 * @author		WanWizard
 * @copyright	Copyright (c) 2010, ExiteCMS.org
 * @link		http://www.exitecms.org
 * @filesource
 */
// ------------------------------------------------------------------------

if (!class_exists('CI_Model')) {

    class CI_Model extends Model {

        function CI_Model() {
            parent::__construct();
        }

    }

}

/**
 * CodeIgniter Model Class
 *
 * @package		CodeIgniter
 * @subpackage	Libraries
 * @category	Libraries
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/libraries/config.html
 */
class FC_Model extends CI_Model {

    protected $tableName = ''; // set db table name
    protected $primaryKey = 'id'; // set PK, 'id' for default
    protected $primaryFilter = 'intval';
    protected $rules = array(); // validation rules

    /**
     * __isset
     *
     * Test if a CI's loaded is present
     *
     * @access private
     */

    function __isset($key) {
        $CI = & get_instance();
        return isset($CI->$key);
    }

    /**
     * Description of model
     *
     * @author Rei Ichimaru (市丸 零)
     * @property CI_DB_active_record $db
     */
    function __construct() {
        parent::__construct();
    }

    function setCriteria($criteria = array(), $isLike = FALSE) { // set where or like query
        $method = ($isLike) ? 'like' : 'where';

        if (!count($criteria)) {
            $this->db->$method($criteria);
        }
    }

    function setOrder($by = '') { // set order query
        if ($by !== '') {
            $this->db->order_by($by);
        }
    }

    function setLimit($limit, $offset = 1) { // set limit query
        if ($offset > 0) {
            $offset--;
        } else {
            $offset = 0;
        }

        $this->db->limit($limit, $offset);
    }

    /*
     * get data, 
     * return object or array
     * return null if table name not set
     */

    function getData($single = FALSE) { // single same as one object
        $method = ($single) ? 'row' : 'result';
        return ($this->tableName !== '') ? $this->db->get($this->tableName)->$method() : NULL;
    }

    /*
     * save or update data to database
     * public access
     */

    function save($data, $id = 0, $duplicate = array()) {
        if ($id === 0) { // save
            $id = (self::_save($data, $duplicate)) ? $this->db->insert_id() : 0;
        } else { // update
            $id = (self::_update($data, $id)) ? $id : 0;
        }

        return $id;
    }

    private function _save($data, $duplicate) { // save method - local process
        $result = FALSE;

        if (self::_checkDuplicate($duplicate)) {
            !isset($data[$this->primaryKey]) || $data[$this->primaryKey] = NULL; // exception handling
            $result = $this->db->insert($this->tableName, $data);
        }

        return $result;
    }

    private function _checkDuplicate($duplicate) {
        self::setCriteria($duplicate); // check duplicate rules
        $object = $this->db->get($this->tableName);
        return ($object->num_rows() === 0) ? TRUE : FALSE;
    }

    private function _update($data, $id) { // update method - local process
        self::_initID($id);
        return $this->db->update($this->tableName, $data);
    }

    function delete($id) { // delete data from database
        self::_initID($id);
        self::setLimit(1);
        return $this->db->delete($this->tableName);
    }

    private function _initID($id) { // init handling 'id' primary key
        $filter = $this->primaryFilter;
        $id = $filter($id);
        self::setCriteria(array($this->primaryKey => $id));
    }

    public function getRules() { // get validation rules
        return $this->rules;
    }

}

// END FC_Model Class

/* End of file FC_Model.php */
/* Location: ./application/core/FC_Model.php */
