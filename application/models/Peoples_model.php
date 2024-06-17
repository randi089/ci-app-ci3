<?php

class Peoples_model extends CI_Model
{
    public function getAllPeoples()
    {
        return $this->db->get('peoples')->result_array();
    }

    public function getPeopleById($id)
    {
        return $this->db->get_where('peoples', ['id' => $id])->row_array();
    }

    public function editDataPeople()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "email" => $this->input->post('email', true),
            "address" => $this->input->post('address', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('peoples', $data);
    }

    public function deleteDataPeople($id)
    {
        $this->db->delete('peoples', ['id' => $id]);
    }
}
