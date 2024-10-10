<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Drivers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('drivers/DashboardT');
    }

    public function offers()
    {
        
        $this->load->view('drivers/Listt');
    }
    public function historyTravelD()
    {
        
        $this->load->view('drivers/Historialt');
    }
    public function paysD()
    {
        
        $this->load->view('drivers/Pagost');
    }
    public function evaluationsD()
    {
        
        $this->load->view('drivers/Evaluacionest');
    }
}

/* End of file Transportista.php and path \application\controllers\Transportista.php */
