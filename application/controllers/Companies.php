<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('companies/DashboardE');
    }

    function createRequest()
    {
        $this->load->view('companies/CreateRequest');
    }
    function historyTravel()
    {
        $this->load->view('companies/HistoryTravel');
    }
    function evaluationsT()
    {
        $this->load->view('companies/EvaluaionsT');
    }
    function paysE()
    {
        $this->load->view('companies/PaysE');
    }

}

/* End of file Companies.php and path \application\controllers\Companies.php */
