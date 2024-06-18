<?php

class Peoples extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'List of Peoples';

        $tot_rows = $this->peoples->countAllPeoples();

        // pagination config
        $config = [
            'base_url' => 'http://localhost/ci-app/peoples/index',
            'total_rows' => $tot_rows,
            'per_page' => 12,
            'num_links' => 5,

            'full_tag_open' => '<nav><ul class="pagination">',
            'full_tag_close' => '</ul></nav>',

            'first_tag_open' => '<li class="page-item">',
            'first_tag_close' => '</li>',

            'last_tag_open' => '<li class="page-item">',
            'last_tag_close' => '</li>',

            'next_link' => '&raquo',
            'next_tag_open' => '<li class="page-item">',
            'next_tag_close' => '</li>',

            'prev_link' => '&laquo',
            'prev_tag_open' => '<li class="page-item">',
            'prev_tag_close' => '</li>',

            'cur_tag_open' => '<li class="page-item active"><a class="page-link" href="#">',
            'cur_tag_close' => '</a></li>',

            'num_tag_open' => '<li class="page-item">',
            'num_tag_close' => '</li>',

            'attributes' => array('class' => 'page-link')
        ];
        $this->pagination->initialize($config);
        $data['pagination'] = $this->pagination->create_links();

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);
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
