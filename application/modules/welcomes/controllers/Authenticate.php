<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authenticate extends CI_Controller {
    function __construct(){
        parent::__construct();
    }
	/**
	 * Index Page for this controller.
	**/
	public function index()
	{
        // /$this->load->view('welcome_message');
        echo "this is login page";
    }
    //
    //post request
    function authenticate(){
        //
    }
    static function getAuthenticate(){
        return 'Authenticated';
    }
}
