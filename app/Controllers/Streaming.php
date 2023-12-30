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
        $anime = $this->animeModel->findAll();

        $data = [
            'title' => 'streaming | 5nime',
            'anime' => $anime
        ];
        return view('streaming/index', $data);
    }
}
