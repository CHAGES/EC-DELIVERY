<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transportista extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['dash'] = 'active';
        $data['ofertas'] = '';
        $data['hist'] = '';
        $data['pagos'] = '';
        $data['eval'] = '';
        $this->load->view('dashboardt', $data);
    }

    public function ofertas()
    {
        $data['ofertas'] = 'active';
        $data['dash'] = '';
        $data['hist'] = '';
        $data['pagos'] = '';
        $data['eval'] = '';
        $this->load->view('listt', $data);
    }
    public function historial()
    {
        $data['hist'] = 'active';
        $data['ofertas'] = '';
        $data['dash'] = '';
        $data['pagos'] = '';
        $data['eval'] = '';
        $this->load->view('historialt', $data);
    }
    public function pagos()
    {
        $data['pagos'] = 'active';
        $data['ofertas'] = '';
        $data['hist'] = '';
        $data['dash'] = '';
        $data['eval'] = '';
        $this->load->view('pagost', $data);
    }
    public function evaluaciones()
    {
        $data['eval'] = 'active';
        $data['ofertas'] = '';
        $data['hist'] = '';
        $data['pagos'] = '';
        $data['dash'] = '';
        $this->load->view('evaluacionest', $data);
    }
}

/* End of file Transportista.php and path \application\controllers\Transportista.php */
