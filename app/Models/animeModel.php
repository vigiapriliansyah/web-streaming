<?php

namespace App\Models;

use CodeIgniter\Model;

class animeModel extends Model
{
    protected $table = 'tbl_anime';
    protected $useTimestamps = true;
    protected $primaryKey = 'id_anime';
    protected $allowedFields =  ['judul', 'deskripsi', 'rating', 'tahun', 'file_video', 'file_gambar'];
    public function data_anime($id_anime)
    {
        return $this->find($id_anime);
    }
    public function update_data($data, $id_anime)
    {
        $query = $this->db->table($this->table)->update($data, array('id_anime' => $id_anime));
        return $query;
    }
    public function delete_data($id_anime)
    {
        $query = $this->db->table($this->table)->delete(array('id_anime' => $id_anime));
        return $query;
    }
}
