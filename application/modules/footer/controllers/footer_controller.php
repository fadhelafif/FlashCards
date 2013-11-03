<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');


class Footer_Controller extends FC_Controller
{
	function __construct() {

	}

	function index($data) {

		$self = $this->__modulereference;

		$this->$self->view('footer', $data);
	}

}