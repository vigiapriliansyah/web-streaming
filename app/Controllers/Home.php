<?php

namespace App\Controllers;

use App\Models\animeModel;
use App\Models\detailGenreModel;
use App\Models\genreModel;

class Home extends BaseController
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
        $data = [
            'title' => 'Home | 5nime'
        ];

        return view('/home/index', $data);
    }

    public function animeList()
    {
        $data = [
            'title' => 'AnimeList | 5nime'
        ];
        return view('/home/animeList', $data);
    }

    public function genreList()
    {
        $genre = new genreModel();
        $data_genre = $genre->get_genre();

        $builder = $this->animeModel->db->table('tbl_anime ta');
        $builder->select('tg.genre as genre,ta.judul AS judul, ta.id_anime');
        $builder->join('detail_genre dg', 'ta.id_anime = dg.id_anime');
        $builder->join('tbl_genre tg', 'dg.id_genre = tg.id_genre');

        $result = $builder->get()->getResultArray();

        // Mengurutkan array berdasarkan judul anime (urutan abjad a-z)
        usort($result, function ($a, $b) {
            return strcmp($a['judul'], $b['judul']);
        });

        $data = [
            'title' => 'Genre | 5nime',
            'anime' => $result,
            'genre' => $data_genre
        ];
        return view('/home/genreList', $data);
    }


    public function contact()
    {
        $data = [
            'title' => 'Contact | 5nime'
        ];
        return view('/home/contact', $data);
    }
}
