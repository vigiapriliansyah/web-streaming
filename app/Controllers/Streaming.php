<?php

namespace App\Controllers;

class Streaming extends BaseController
{
    public function Black_Butler()
    {
        $data = [
            'title' => 'streaming | 5nime'
        ];
        return view('streaming/Black_Butler', $data);
    }

    public function Akira()
    {
        $data = [
            'title' => 'streaming | 5nime',
        ];
        return view('streaming/Akira');
    }

    public function Gintaman()
    {
        $data = [
            'title' => 'streaming | 5nime',
        ];
        return view('streaming/Gintaman');
    }
}