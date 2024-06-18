<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List of Peoples';

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // Cari
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('peoples');
        $data['tot_rows'] = $this->db->count_all_results();

        // pagination config
        $config = [
            'total_rows' => $data['tot_rows'],
            'per_page' => 8,
        ];

        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail People';
        $data['people'] = $this->peoples->getPeopleById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/detail', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $this->peoples->deleteDataPeople($id);
        $this->session->set_flashdata('flash1', 'Deleted');
        redirect('peoples');
    }

    public function edit($id)
    {
        $data['judul'] = 'Edit Data People';
        $data['people'] = $this->peoples->getPeopleById($id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('peoples/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->peoples->editDataPeople();
            $this->session->set_flashdata('flash1', 'Diedit');
            redirect('peoples');
        }
    }
}
