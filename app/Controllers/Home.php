<?php

namespace App\Controllers;

use App\Models\animeModel;
use App\Models\detailGenreModel;
use App\Models\genreModel;

class Home extends BaseController
{

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
        $data = [
            'title' => 'GenreList | 5nime'
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

    public function streaming()
    {
        $data = [
            'title' => 'streaming | 5nime'
        ];
        return view('/home/Black_Butler', $data);
    }
}
