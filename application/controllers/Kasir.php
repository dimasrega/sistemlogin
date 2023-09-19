<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kasir extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_barang');
    }

    public function simpanbarang()
    {
        $data['title'] = 'Barang Master';
        $data['user'] = $this->db->get_where('user', [
            'email' =>
            $this->session->userdata('email')
        ])->row_array();

        $this->load->model('Model_barang', 'getmenu');

        $data['barang_master'] = $this->getmenu->getmenu();
        $data['kategori'] = $this->db->get('kategori_menu')->result_array();

        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');
        $this->form_validation->set_rules('menu_id', 'kategori', 'required');
        $this->form_validation->set_rules('stok', 'stok', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kasir/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'harga' => $this->input->post('harga'),
                "menu_id" => $this->input->post('menu_id'),
                'stok' => $this->input->post('stok')
            ];
            $this->db->insert('barang_master', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            <i class="fa-solid fa-check-double" style="color: #ffffff;"></i>Barang baru tertambah!</div>');
            redirect('kasir/simpanbarang');
        }
    }
    public function tempatkasir()
    {
        $data['title'] = 'Kasir';
        $data['user'] = $this->db->get_where('user', [
            'email' =>
            $this->session->userdata('email')
        ])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('kasir/kasir', $data);
        $this->load->view('templates/footer');
    }

    public function edit_barang($id)
    {
        $data = [
            'id' => $id,
            "nama_barang" => $this->input->post('nama_barang'),
            "harga" => $this->input->post('harga'),
            "menu_id" => $this->input->post('menu_id'),
            "stok" => $this->input->post('stok'),
        ];

        $this->Model_barang->barang_edit($data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            edit berhasil.</div>');
        redirect('kasir/simpanbarang');
    }

    public function kategori()
    {
        $data['title'] = 'Kategori';
        $data['user'] = $this->db->get_where('user', [
            'email' =>
            $this->session->userdata('email')
        ])->row_array();

        $data['kategori'] = $this->db->get('kategori_menu')->result_array();

        $this->form_validation->set_rules('kategori', 'kategori', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('kasir/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('kategori_menu', ['kategori' => $this->input->post('kategori')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Kategori added!</div>');
            redirect('kasir/kategori');
        }
    }
}
