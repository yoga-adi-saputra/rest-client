<?php

class Band extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Band_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Band';
        $data['daftar_band'] = $this->Band_model->getAllBand();
        $this->load->view('templates/header', $data);
        $this->load->view('band/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Band';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('genre', 'Genre', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');
        
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('band/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Band_model->tambahDataBand();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('band');
        }
    }

    public function hapus($id)
    {
        $this->Band_model->hapusDataBand($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('band');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Band';
        $data['daftar_band'] = $this->Band_model->getBandById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('band/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Band';
        $data['daftar_band'] = $this->Band_model->getBandById($id);
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('genre', 'Genre', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('kontak', 'Kontak', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('band/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Band_model->ubahDataBand();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('band');
        }
    }

}
