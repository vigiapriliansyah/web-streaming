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

    public function getGenreIdsByAnimeId($id_anime)
    {
        return $this->select('id_genre')->where('id_anime', $id_anime)->findAll();
    }

    public function getGenreByAnimeId($id_anime)
    {
        $builder = $this->db->table('detail_genre dg');
        $builder->select('tg.genre');
        $builder->join('tbl_genre tg', 'dg.id_genre = tg.id_genre');
        $builder->where('dg.id_anime', $id_anime);

        return $builder->get()->getResultArray();
    }
}
