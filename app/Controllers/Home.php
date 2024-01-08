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
        $recentlyAddedAnime = $this->animeModel->getRecentlyAddedAnime();
        $animeTahun2023 = $this->animeModel->getAnimeByYear(2023, 5);
        $sliderData = $this->animeModel->getSliderData(3);

        $data = [
            'recentlyAddedAnime' => $recentlyAddedAnime,
            'animeTahun2023' => $animeTahun2023,
            'sliderData' => $sliderData,
            'title' => 'Home | 5nime',
        ];

        return view('/home/index', $data);
    }

    public function animeList()
    {
        $builder = $this->animeModel->db->table('tbl_anime ta');
        $builder->select('ta.judul AS judul, ta.id_anime');
        $builder->orderBy('judul', 'ASC');

        $result = $builder->get()->getResultArray();

        $groupedAnime = [];

        foreach ($result as $title) {
            $firstLetter = strtoupper(substr($title['judul'], 0, 1));

            $groupedAnime[$firstLetter][] = $title;
        }

        $data = [
            'title' => 'AnimeList | 5nime',
            'groupedAnime' => $groupedAnime,
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

    public function search()
    {
        $searchKeyword = $this->request->getPost('search_keyword');

        if (!empty($searchKeyword)) {
            // Perform the search using the $searchKeyword
            $searchResults = $this->animeModel->searchAnime($searchKeyword);

            $data = [
                'title' => 'Search Results | 5nime',
                'searchResults' => $searchResults,
                'searchKeyword' => $searchKeyword,
            ];

            return view('home/search', $data); // Update the view path
        } else {
            // Handle the case when the search keyword is empty
            // Redirect or show an error message as needed
            return redirect()->to('/');
        }
    }
}
