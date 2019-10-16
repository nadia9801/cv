<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_model extends CI_Model
{
    public function rules()
    {
        return [
            ['field' => 'nama_lengkap',
            'label' => 'Nama Lengkap',
            'rules' => 'required'],

            ['field' => 'nama_panggilan',
            'label' => 'Nama Panggilan',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'Ttl',
            'rules' => 'required'],

            ['field' => 'alamat',
            'label' => 'Alamat',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'Jenis Kelamin',
            'rules' => 'required'],

            ['field' => 'agama',
            'label' => 'Agama',
            'rules' => 'required'],

            ['field' => 'no_telp',
            'label' => 'No. Telp',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],

            ['field' => 'resume',
            'label' => 'Resume',
            'rules' => 'required']

            
        ];
    }

    public function getAll()
    {
        return $this->db->get('biodata')->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where('biodata', ["biodata_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->biodata_id = uniqid();
        $this->nama_lengkap    = $post["nama_lengkap"];
        $this->nama_panggilan    = $post["nama_panggilan"];
        $this->ttl    = $post["ttl"];
        $this->alamat  = $post["alamat"];
        $this->moto     = $post["moto2"];
        $this->moto2     = $post["moto"];
        $this->jenis_kelamin   = $post["jenis_kelamin"];
        $this->agama = $post["agama"];
        $this->no_telp   = $post["no_telp"];
        $this->email= $post["email"];
        $this->resume   = $post["resume"];
        $this->foto     = $this->_uploadImage();
        // var_dump($this);
        $this->db->insert('biodata', $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->biodata_id = $post["id"];
        $this->nama_lengkap    = $post["nama_lengkap"];
        $this->nama_panggilan    = $post["nama_panggilan"];
        $this->ttl    = $post["ttl"];
        $this->alamat  = $post["alamat"];
        $this->moto     = $post["moto2"];
        $this->moto2     = $post["moto"];
        $this->jenis_kelamin   = $post["jenis_kelamin"];
        $this->agama = $post["agama"];
        $this->no_telp   = $post["no_telp"];
        $this->email= $post["email"];
        $this->resume   = $post["resume"];

        if (!empty($_FILES["foto"]["name"])) {
            $this->foto = $this->_uploadImage();
        } else {
            $this->foto = $post["old_image"];
        }

        $this->db->update('biodata', $this, array('biodata_id' => $post['id']));
        
    }

    public function delete($id)
    {
        return $this->db->delete('biodata', array("biodata_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './assets/img/about/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = $this->biodata_id;
        $config['overwrite']			= true;
        $config['max_size']             = 1024; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
        
        return "eka.jpg";
    }
}