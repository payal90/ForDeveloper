<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShortenController extends CI_Controller { 

    public function index() 
    {
        $data = []; 
        if($this->input->post('url'))
        {
            $this->load->model('short_model');
            $short_url=$this->short_model->long_url_store();
            if($short_url)
            {
                $data['short_url']=$short_url;
            }
            else 
            {
                $data['error'] = validation_errors();
            }
        }

        $this->load->view('get_url', $data);
    }

    public function get_short_url() 
    {
        $this->load->model('short_model'); 
        $short_url = $this->uri->segment(1);
        redirect($this->short_model->long_url_get($short_url));
    }
}