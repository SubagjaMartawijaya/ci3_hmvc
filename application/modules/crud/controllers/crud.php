<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');

	}

	function index(){
		$data['user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}

	function tambah_aksi(){
		$blue = $this->input->post('blue');
		$traditional = $this->input->post('traditional');
		$top = $this->input->post('top');
        $democratic = $this->input->post('democratic');
        $enjoy = $this->input->post('enjoy');
        $mr = $this->input->post('Mr');
        $stock = $this->input->post('stock');
        $you = $this->input->post('you');
        $first = $this->input->post('first');

		$data = array(
			'blue' => $blue,
			'traditional' => $traditional,
			'top' => $top,
            'democratic' => $democratic,
            'enjoy' => $enjoy,
            'mr' => $mr,
            'stock' => $stock,
            'you' => $you,
            'first' => $first
			);

		$this->m_data->input_data($data,'care');
		redirect('crud/index');
	}

    function update(){
        $which = $this->input->post('which');
        $blue = $this->input->post('blue');
		$traditional = $this->input->post('traditional');
		$top = $this->input->post('top');
        $democratic = $this->input->post('democratic');
        $enjoy = $this->input->post('enjoy');
        $mr = $this->input->post('Mr');
        $stock = $this->input->post('stock');
        $you = $this->input->post('you');
        $first = $this->input->post('first');

        $data = array(
			'blue' => $blue,
			'traditional' => $traditional,
			'top' => $top,
            'democratic' => $democratic,
            'enjoy' => $enjoy,
            'mr' => $mr,
            'stock' => $stock,
            'you' => $you,
            'first' => $first
			);
     
        $where = array(
            'which' => $which
        );
     
        $this->m_data->update_data($where,$data,'care');
        redirect('crud/index');
    }

    function hapus($which){
		$where = array('which' => $which);
		$this->m_data->hapus_data($where,'care');
		redirect('crud/index');
	}

    function edit($which){
		$where = array('which' => $which);
		$data['care'] = $this->m_data->edit_data($where,'care')->result();
		$this->load->view('v_edit',$data);
	}

}