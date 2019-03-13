<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ferdous Anam
 * Date: 13-03-2019
 * Time: 11:09 PM
 */
class BladeTest extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index() {
    	$data = array(
			'name' => 'Ferdous Anam'
		);
		echo $this->blade->view()->make('blade_view', compact('data'));
    }
}
