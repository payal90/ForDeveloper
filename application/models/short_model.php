<?php

class Short_model extends CI_Model {

    function long_url_store()
    {
    	$this->form_validation->set_rules('url', 'URL', 'trim|prep_url|required|min_length[5]|max_length[250]');
    	if($this->form_validation->run())
    	{
    		$this->db->insert('urls', array('long_url'=>$this->input->post('url')));
    		return str_replace('=','-', base64_encode($this->db->insert_id()));
    	}
    }

    function long_url_get($shorty='')
    {
    	$query=$this->db->get_where('urls', array('id'=> base64_decode(str_replace('-','=', $shorty))));
    	if($query->num_rows()>0)
    	{
    		foreach ($query->result() as $row)
			{
			    return $row->long_url;
			}
    	}
    	return '/error_404';
    }

}