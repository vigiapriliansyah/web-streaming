<?php

namespace App\Controllers;

use App\Models\animeModel;
use App\Models\genreModel;
use App\Models\detailGenreModel;

class Anime extends BaseController
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
        $builder = $this->animeModel->db->table('tbl_anime a');
        $builder->select('a.id_anime, a.judul, a.deskripsi, a.rating, a.tahun, GROUP_CONCAT(g.genre) AS genres, a.file_video, a.file_gambar');
        $builder->join('detail_genre d', 'a.id_anime = d.id_anime');
        $builder->join('tbl_genre g', 'd.id_genre = g.id_genre');
        $builder->groupBy('a.id_anime');

        $result = $builder->get()->getResult();

        $data = [
            'title' => 'Home | 5nime',
            'anime' => $result,
            // Add other data as needed
        ];

        echo view('dashboard/index', $data);
    }

    public function tambah_anime()
    {
        $genre = $this->genreModel->findAll();
        $data = [
            'title' => 'Tambah | Dashboard',
            'validation' => \Config\Services::validation(),
            'genre' => $genre
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
            'rating' => 'required',
            'tahun' => 'required|numeric',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->to('anime/tambah_anime')->with('errors', "Note : Jangan ada data yang sama atau kosong");
        }

        $data = [
            'judul' => $this->request->getVar('judul'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'rating' => $this->request->getVar('rating'),
            'tahun' => $this->request->getVar('tahun'),
        ];

        // Check if file video is provided
        if ($fileVideo->isValid()) {
            $fileVideo->move('uploud/video');
            $data['file_video'] = $fileVideo->getName();
        }

        // Check if file gambar is provided
        if ($fileGambar->isValid()) {
            $fileGambar->move('uploud/images');
            $data['file_gambar'] = $fileGambar->getName();
        }

        $lastInsertID = $this->animeModel->insert($data);

        $genre = $this->request->getVar('genre');

        foreach ($genre as $dataGenre) {
            $additionalData = [
                'id_anime' => $lastInsertID,
                'id_genre' => $dataGenre
            ];
            $this->detailGenreModel->save($additionalData);
        }

        return redirect()->to('anime')->with('success', "Berhasil Menguploud Data");
    }

    public function edit($id_anime)
    {
        $anime = $this->animeModel->data_anime($id_anime);
        $genre = $this->genreModel->findAll();
        $selectedGenreIds = $this->detailGenreModel->getGenreIdsByAnimeId($id_anime);

        $data = [
            'title' => 'Edit | Dashboard',
            'anime' => $anime,
            'genre' => $genre,
            'selectedGenreIds' => $selectedGenreIds,
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
            'rating' => $this->request->getVar('rating'),
            'tahun' => $this->request->getVar('tahun'),
            'file_video' => $namaVideo,
            'file_gambar' => $namaGambar
        ];

        $this->animeModel->update_data($data, $id_anime);

        // Hapus genre yang sudah ada untuk anime tersebut
        $this->detailGenreModel->where('id_anime', $id_anime)->delete();

        // Tambahkan kembali genre yang baru dipilih
        $genre = $this->request->getVar('genre');

        foreach ($genre as $dataGenre) {
            $additionalData = [
                'id_anime' => $id_anime,
                'id_genre' => $dataGenre
            ];
            $this->detailGenreModel->save($additionalData);
        }

        return redirect()->to('anime')->with('success', "Data berhasil diupdate");
    }



    public function delete($id_anime)
    {
        $this->animeModel->delete_data($id_anime);
        return redirect()->to('anime');
    }
}
