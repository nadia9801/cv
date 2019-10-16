<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model
{
    private $_table = "login";

    public function login()
    {
        $post = $this->input->post();

        $this->db->select('login.register_id, login.email, login.password');
        $this->db->where('login.email', $post['email']);
        $login = $this->db->get('login')->row_array();  

        if ($login) {            
            if (md5($post["password"]) == $login['password']) {
                $data =[
                    'email'         => $login['email'],
                    'register_id'   => $login['register_id']
                ];
                $this->session->set_userdata($data);
                redirect('admin/view');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah!</div>');
                redirect('admin');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Email tidak terdaftar!</div>');
            redirect('login');
        }

    }
    public function register()
    {
        $post = $this->input->post();

            $this->register_id  = uniqid();
            $this->nama         = htmlspecialchars($post["nama"]);
            $this->email        = htmlspecialchars($post["email"]);
            $this->password     = password_hash($post["password"], PASSWORD_DEFAULT);

            $tambah_member = $this->db->insert($this->_table, $this);
            if ($tambah_member) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pendaftaran Berhasil, Silahkan Login</div>');
                redirect('login');
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Pendaftaran Gagal</div>');
                redirect('register');
            } 
    } 
}