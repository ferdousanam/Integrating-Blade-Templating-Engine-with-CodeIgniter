<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Coolpraz\PhpBlade\PhpBlade;
class MY_Controller extends CI_Controller {
	protected $views;
	protected $cache;
	protected $blade;
	public function __construct() {
		parent::__construct();
		$this->views = APPPATH . 'views';
		$this->cache = APPPATH . 'cache';
		$this->blade = new PhpBlade($this->views, $this->cache);
	}
}
