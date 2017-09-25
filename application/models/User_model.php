<?php
class User_model extends CI_Model {

    public $name;
    public $email;
    public $address1;
    public $address2;
    public $password;
    public $created_at;

    public function insert_user()
    {
        $this->name         = $this->input->post('name', TRUE);
        $this->email        = $this->input->post('email', TRUE);
        $this->address1     = $this->input->post('address1', TRUE);
        $this->address2     = $this->input->post('address2', TRUE);
        $this->password     = $this->input->post('password', TRUE);
        $this->created_at   = date("Y-m-d");
        $this->db->insert('users', $this);
        return true;
    }



}