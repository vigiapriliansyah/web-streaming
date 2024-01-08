<?php

namespace App\Controllers;

use App\Models\genreModel;
use App\Models\detailGenreModel;

class Genre extends BaseController
{
    protected $genreModel;
    protected $detailGenreModel;
    public function __construct()
    {
        $this->genreModel = new genreModel();
        $this->detailGenreModel = new detailGenreModel();
    }

    public function index()
    {

        $genres = $this->genreModel->get_genre();

        $data = [
            'title' => 'Panel Konten | 5nime',
            'genres' => $genres,
        ];

        echo view('dashboard/genre', $data);
    }

    public function tambah_genre()
    {
        $genre = $this->genreModel->findAll();
        $data = [
            'title' => 'Panel Konten | 5nime',
            'genre' => $genre
        ];

        echo view('dashboard/tambah_genre', $data);
    }

    public function simpan()
    {
        $validationRules = [
            'genre' => 'required|is_unique[tbl_genre.genre]',
        ];


        if (!$this->validate($validationRules)) {
            return redirect()->to('genre/tambah_genre')->with('errors', "Note : Jangan ada data yang sama atau kosong");
        }

        $data = [
            'genre' => $this->request->getVar('genre'),
        ];

        $this->genreModel->insert($data);

        return redirect()->to('genre')->with('success', 'Data Tersimpan!');
    }


    public function edit($id_genre)
    {

        $genre = $this->genreModel->data_genre($id_genre);

        $data = [
            'title' => 'Edit | Panel Konten',
            'genre' => $genre,
        ];

        echo view('dashboard/edit_genre', $data);
    }

    public function update($id_genre)
    {


        $data = [
            'genre' => $this->request->getPost('genre'),
        ];

        $this->genreModel->update_data($data, $id_genre);

        return redirect()->to('genre')->with('success', 'Data Terupdate!');
    }


    public function delete($id_genre)
    {
        $this->genreModel->delete_data($id_genre);
        return redirect()->to('genre');
    }
}
