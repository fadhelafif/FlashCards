<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


class Sidebar_Controller extends FC_Controller
{
	function __construct() {

	}

	function index($data) {

		$self = $this->__modulereference;

		return $this->$self->view('sidebar', $data, TRUE);
	}

}