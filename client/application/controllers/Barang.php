<?php

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('templates/header', $data);
        $this->load->view('barang/barang', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Barang';

        $this->form_validation->set_rules('id_barang', 'ID_BARANG', 'required');
        $this->form_validation->set_rules('nama_barang', 'NAMA_BARANG', 'required');
        $this->form_validation->set_rules('harga_barang', 'HARGA_BARANG', 'required');
        $this->form_validation->set_rules('stok_barang', 'STOK_BARANG', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Barang_model->tambahDataBarang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('barang');
        }
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('barang/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Edit Data Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        
        $this->form_validation->set_rules('id_barang', 'ID_BARANG', 'required');
        $this->form_validation->set_rules('nama_barang', 'NAMA_BARANG', 'required');
        $this->form_validation->set_rules('harga_barang', 'HARGA_BARANG', 'required');
        $this->form_validation->set_rules('stok_barang', 'STOK_BARANG', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Barang_model->ubahDataBarang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('barang');
        }
    }

    public function hapus($id)
    {
        $this->Barang_model->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }


}
