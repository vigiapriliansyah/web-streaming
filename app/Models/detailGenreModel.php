<?php

namespace App\Models;

use CodeIgniter\Model;

class detailGenreModel extends Model
{
    protected $table = 'detail_genre';
    protected $primaryKey = 'id_detail';
    protected $allowedFields = ['id_anime', 'id_genre'];

    public function data_detail($id_detail)
    {
        return $this->find($id_detail);
    }
    public function update_data($data, $id_detail)
    {
        $query = $this->db->table($this->table)->update($data, array('id_detail' => $id_detail));
        return $query;
    }
    public function delete_data($id_detail)
    {
        $query = $this->db->table($this->table)->delete(array('id_detail' => $id_detail));
        return $query;
    }
}
