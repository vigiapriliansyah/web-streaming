<?php

namespace App\Models;

use CodeIgniter\Model;

class genreModel extends Model
{
    protected $table = 'tbl_genre';
    protected $primaryKey = 'id_genre';
    protected $allowedFields = 'genre';

    public function data_genre($id_genre)
    {
        return $this->find($id_genre);
    }
    public function update_data($data, $id_genre)
    {
        $query = $this->db->table($this->table)->update($data, array('id_genre' => $id_genre));
        return $query;
    }
    public function delete_data($id_genre)
    {
        $query = $this->db->table($this->table)->delete(array('id_genre' => $id_genre));
        return $query;
    }
}
