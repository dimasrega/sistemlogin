<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_barang extends CI_Model
{
    public function barang_edit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('barang_master', $data);
    }


    public function getmenu()
    {
        $query = "SELECT `barang_master`.*, `kategori_menu`. `kategori`
            FROM `barang_master` JOIN `kategori_menu`
            ON `barang_master`.`menu_id` = `kategori_menu`.`id`
            ";
        return $this->db->query($query)->result_array();

        // $this->db->select("*");
        // $this->db->from("barang_master as bm");
        // $this->db->join("kategori_menu as km", 'km.id = bm.menu_id');
        // $query = $this->db->get();
    }
}
