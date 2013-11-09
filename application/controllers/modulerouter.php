<?php

/**
 * CodeIgniter Module Router Controller
 *
 * This controller allows you to route to module controllers, without having
 * to modify or extend the CodeIgniter core code.
 *
 * All you need is to add a route in config/routes.php for each of your
 * modules:
 *
 * $route['(:any)/(.*)'] = 'modulerouter/$1/$2';
 *
 * @package		Modular CI
 * @subpackage	Controllers
 * @category	Controllers
 * @author		ExiteCMS Dev Team
 * @link
 */
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

/**
 * Description of modulerouter
 *
 * @author Rei Ichimaru (市丸 零) <jms21maru@gmail.com>
 */
class ModuleRouter extends FC_Controller {

    function __construct() {
        parent::__construct();
    }

    /*
     * capture all calls to this controller, we don't support direct access
     */

    function _remap() {
        $path = $this->load->module_path('modules'); // set the location of our modules
        $segments = $this->uri->rsegments; // fetch the URI segments
        array_shift($segments); // drop the first one, it's this controller
        // fetch the required info from the segments
        $module = array_shift($segments);
        $controller = array_shift($segments);
        $method = array_shift($segments);
        // validate the info
        if (empty($controller)) {
            show_404(); // we don't have a controller, bail out
        }

        if (empty($method)) {
            $method = 'index'; // we don't have a method, load index instead
        }
        // check if we've been called directly
        if (strtolower($module) == strtolower(get_class($this))) {
            // pretend we don't exist
            show_404();
        } else {
            // does the requested module exists?
            if (!is_dir($path . '/' . strtolower($module))) {
                // module not found, page can't exist
                show_404();
            } else {
                // initialize the module
                $this->load->module(strtolower($module));

                // does the controller contain a _remap() method?
                if (method_exists($this->$module->controller->$controller, '_remap')) {
                    // call the controllers remap method
                    $this->$module->controller->$controller->_remap($method);
                } else {
                    // call the requested controller method, pass the remaining segments
                    call_user_func_array(array($this->$module->controller->$controller, $method), $segments);
                }
            }
        }
    }

}

/* End of file modulerouter.php */