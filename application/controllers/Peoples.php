<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List of Peoples';
        $data['peoples'] = $this->peoples->getAllPeoples();
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
