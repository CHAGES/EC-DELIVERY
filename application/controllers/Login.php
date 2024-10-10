<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('login/Singin');
    }

    public function logout()
    {
        $this->load->view('index');
    }
}

/* End of file Login.php and path \application\controllers\Login.php */
