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

    public function getAnimeInfo()
    {
        $builder = $this->db->table('tbl_anime ta');
        $builder->select('ta.*, GROUP_CONCAT(tg.genre) AS genres');
        $builder->join('detail_genre dg', 'ta.id_anime = dg.id_anime', 'left');
        $builder->join('tbl_genre tg', 'dg.id_genre = tg.id_genre', 'left');
        $builder->groupBy('ta.id_anime');

        return $builder->get()->getResultArray();
    }

    public function getRecentlyAddedAnime()
    {
        return $this->orderBy('created_at', 'DESC') // Sesuaikan dengan kolom yang menyimpan waktu penambahan anime
            ->findAll();
    }

    public function getAnimeByYear($year, $limit = null)
    {
        $query = $this->where('tahun', $year);

        if ($limit) {
            $query->limit($limit);
        }

        return $query->findAll();
    }

    public function rekomendasiRandom($limit = 10)
    {
        $this->select('id_anime, judul');
        $this->orderBy('RAND()');

        $results = $this->findAll();

        // Pastikan tidak melebihi batas yang diinginkan
        $rekomendasiRandom = array_slice($results, 0, $limit);

        return $rekomendasiRandom;
    }

    public function searchAnime($keyword)
    {
        $builder = $this->db->table('tbl_anime');
        $builder->like('judul', $keyword);

        return $builder->get()->getResultArray();
    }
}
