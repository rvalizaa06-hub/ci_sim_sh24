<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_model');
        $this->load->model('kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['buku'] = $this->Buku_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['kategori'] = $this->kategori_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/form_buku', $data);
        $this->load->view('templates/footer');
    }

    public function simpan()
    {
        $this->form_validation->set_rules('kode_buku',   'Kode Buku',   'required');
        $this->form_validation->set_rules('judul_buku',  'Judul Buku',  'required');
        $this->form_validation->set_rules('penulis',     'Penulis',     'required');
        $this->form_validation->set_rules('penerbit',    'Penerbit',    'required');
        $this->form_validation->set_rules('tahun',       'Tahun',       'required|numeric');
        $this->form_validation->set_rules('id_kategori', 'Kategori',    'required');
        $this->form_validation->set_rules('stok',        'Stok',        'required|numeric');
        $this->form_validation->set_rules('lokasi_rak',  'Lokasi Rak',  'required');

        if ($this->form_validation->run() == FALSE) {
            $this->tambah();
        } else {
            $data = [
                'kode_buku'   => $this->input->post('kode_buku'),
                'judul_buku'  => $this->input->post('judul_buku'),
                'penulis'     => $this->input->post('penulis'),
                'penerbit'    => $this->input->post('penerbit'),
                'tahun'       => $this->input->post('tahun'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok'        => $this->input->post('stok'),
                'lokasi_rak'  => $this->input->post('lokasi_rak'),
            ];
            $this->Buku_model->insert($data);
            $this->session->set_flashdata('success', 'Data buku berhasil disimpan');
            redirect('buku');
        }
    }

    public function hapus($id)
    {
        $this->Buku_model->delete($id);
        $this->session->set_flashdata('success', 'Data buku berhasil dihapus');
        redirect('buku');
    }

    public function edit($id)
    {
        $data['buku']     = $this->Buku_model->get_by_id($id);
        $data['kategori'] = $this->kategori_model->get_all();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('buku/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('kode_buku',   'Kode Buku',   'required');
        $this->form_validation->set_rules('judul_buku',  'Judul Buku',  'required');
        $this->form_validation->set_rules('penulis',     'Penulis',     'required');
        $this->form_validation->set_rules('penerbit',    'Penerbit',    'required');
        $this->form_validation->set_rules('tahun',       'Tahun',       'required|numeric');
        $this->form_validation->set_rules('id_kategori', 'Kategori',    'required');
        $this->form_validation->set_rules('stok',        'Stok',        'required|numeric');
        $this->form_validation->set_rules('lokasi_rak',  'Lokasi Rak',  'required');

        if ($this->form_validation->run() == FALSE) {
            $this->edit($id);
        } else {
            $data = [
                'kode_buku'   => $this->input->post('kode_buku'),
                'judul_buku'  => $this->input->post('judul_buku'),
                'penulis'     => $this->input->post('penulis'),
                'penerbit'    => $this->input->post('penerbit'),
                'tahun'       => $this->input->post('tahun'),
                'id_kategori' => $this->input->post('id_kategori'),
                'stok'        => $this->input->post('stok'),
                'lokasi_rak'  => $this->input->post('lokasi_rak'),
            ];
            $this->Buku_model->update($id, $data);
            $this->session->set_flashdata('success', 'Data buku berhasil diupdate');
            redirect('buku');
        }
    }
}
?>