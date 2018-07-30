<?php
class Recruitment extends CI_Controller{
    function index(){
        echo 'this is my index page for recruitment module';
        echo $this->load->controller('welcomes/Authenticate/getAuthenticate');
    }
}