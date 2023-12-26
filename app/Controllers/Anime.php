<?php

namespace App\Controllers;

use App\Models\animeModel;

class Anime extends BaseController
{
    protected $animeModel;
    public function __construct()
    {
        $this->animeModel = new animeModel();
    }

    public function index()
    {
        $anime = $this->animeModel->findAll();
        $data = [
            'title' => 'Home | 5nime',
            'anime' => $anime
        ];

        echo view('dashboard/index', $data);
    }

    public function tambah_anime()
    {
        $data = [
            'title' => 'Tambah | Dashboard',
            'validation' => \Config\Services::validation()
        ];
        echo view('dashboard/tambah_anime', $data);
    }

    public function simpan()
    {
        $fileVideo = $this->request->getFile('file_video');
        $fileGambar = $this->request->getFile('file_gambar');

        // Basic validation for required fields
        $validationRules = [
            'judul' => 'required|is_unique[tbl_anime.judul]',
            'deskripsi' => 'required',
            'genre' => 'required',
            'rating' => 'required|numeric',
            'tahun' => 'required|numeric',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('anime/tambah_anime')->with('errors', "Note : Jangan ada data yang sama atau kosong");
        }
        $fileVideo->move('uploud/video');
        $fileGambar->move('uploud/images');


        $this->animeModel->save([
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'genre' => $this->request->getVar('genre'),
            'rating' => $this->request->getVar('rating'),
            'tahun' => $this->request->getVar('tahun'),
            'file_video' => $fileVideo->getName(),
            'file_gambar' => $fileGambar->getName()
        ]);

        return redirect()->to('anime')->with('success', "Berhasil Menguploud Data");
    }

    public function edit($id_anime)
    {
        $anime = $this->animeModel->data_anime($id_anime);

        $data = [
            'title' => 'Edit | Dashboard',
            'anime' => $anime
        ];

        echo view('dashboard/edit_anime', $data);
    }

    public function update()
    {
        $fileVideo = $this->request->getFile('file_video');
        $fileGambar = $this->request->getFile('file_gambar');

        $id_anime = $this->request->getVar('id_anime');

        // Jika file video baru disediakan, pindahkan dan dapatkan nama file
        if ($fileVideo->isValid()) {
            $fileVideo->move('uploud/video');
            $namaVideo = $fileVideo->getName();
        } else {
            // Jika tidak, gunakan nama file yang sudah ada dalam database
            $anime = $this->animeModel->data_anime($id_anime);
            $namaVideo = $anime['file_video'];
        }

        // Jika file gambar baru disediakan, pindahkan dan dapatkan nama file
        if ($fileGambar->isValid()) {
            $fileGambar->move('uploud/images');
            $namaGambar = $fileGambar->getName();
        } else {
            // Jika tidak, gunakan nama file yang sudah ada dalam database
            $anime = $this->animeModel->data_anime($id_anime);
            $namaGambar = $anime['file_gambar'];
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'genre' => $this->request->getVar('genre'),
            'rating' => $this->request->getVar('rating'),
            'tahun' => $this->request->getVar('tahun'),
            'file_video' => $namaVideo,
            'file_gambar' => $namaGambar
        ];

        $this->animeModel->update_data($data, $id_anime);
        return redirect()->to('anime')->with('success', "Data berhasil diupdate");
    }


    public function delete($id_anime)
    {
        $this->animeModel->delete_data($id_anime);
        return redirect()->to('anime');
    }
}
