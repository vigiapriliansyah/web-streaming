<?php

namespace App\Controllers;

use App\Models\animeModel;
use App\Models\detailGenreModel;
use App\Models\genreModel;


class Streaming extends BaseController
{

    protected $animeModel;
    protected $genreModel;
    protected $detailGenreModel;

    public function __construct()
    {
        $this->animeModel = new animeModel();
        $this->genreModel = new genreModel();
        $this->detailGenreModel = new detailGenreModel();
    }

    public function index()
    {
        $builder = $this->animeModel->db->table('tbl_anime ta');
        $builder->select('ta.*, GROUP_CONCAT(tg.genre) AS genres');
        $builder->join('detail_genre dg', 'ta.id_anime = dg.id_anime', 'left');
        $builder->join('tbl_genre tg', 'dg.id_genre = tg.id_genre', 'left');
        $builder->groupBy('ta.id_anime');

        $anime = $builder->get()->getResultArray();

        $data = [
            'title' => 'streaming | 5nime',
            'anime' => $anime
        ];

        return view('streaming/index', $data);
    }

    public function anime($animeId)
    {
        $anime = $this->animeModel->find($animeId);

        if (!$anime) {
            return redirect()->to('/');
        }

        $genres = $this->detailGenreModel->getGenreByAnimeId($animeId);

        if (!empty($genres)) {
            $genreValues = array_column($genres, 'genre');
            $anime['genres'] = implode(', ', $genreValues);
        } else {
            $anime['genres'] = 'Tidak ada genre'; // Berikan nilai default jika tidak ada genre
        }

        $data = [
            'title' => "Streaming {$anime['judul']} | 5nime",
            'anime' => [$anime],
        ];

        return view('streaming/index', $data);
    }
}
