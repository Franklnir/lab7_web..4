<?php 

namespace App\Controllers;

use App\Models\ArtikelModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Artikel extends BaseController
{
    public function index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/index', compact('artikel', 'title'));
    }

    public function view($slug)
    {
        $model = new ArtikelModel();
        $artikel = $model->where(["slug" => $slug])->first();

        if (!$artikel) {
            throw PageNotFoundException::forPageNotFound();
        }

        $title = $artikel['judul'];
        return view('artikel/detail', compact('artikel', 'title'));
    }
    
    public function admin_index()
    {
        $title = 'Daftar Artikel';
        $model = new ArtikelModel();
        $artikel = $model->findAll();
        return view('artikel/admin_index', compact('artikel', 'title'));
    }
    
    public function about()
    {
        return view('artikel/about', [
            "conten" => "Ini adalah halaman yang menjelaskan tentang informasi dan tujuan dari situs ini.",
            "title" => "Tentang Kami"
        ]);
    }

    // Fungsi untuk menambahkan artikel
    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $artikel = new ArtikelModel();
            $artikel->insert([
                'judul' => $this->request->getPost('judul'),
                'isi' => $this->request->getPost('isi'),
                'slug' => url_title($this->request->getPost('judul'), '-', true),
            ]);
            return redirect()->to('/admin/artikel');
        }

        $title = "Tambah Artikel";
        return view('artikel/form_add', compact('title'));
    }








    public function edit($id)
    {
        $artikel = new ArtikelModel();
        $data = $artikel->where('id', $id)->first();  // Ambil artikel berdasarkan ID
        
        if (!$data) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();  // Jika tidak ditemukan
        }
    
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'isi'   => 'required'
        ]);
    
        if ($validation->withRequest($this->request)->run()) {
            // Jika validasi berhasil, update artikel
            $artikel->update($id, [
                'judul' => $this->request->getPost('judul'),
                'isi'   => $this->request->getPost('isi'),
            ]);
            return redirect()->to('/admin/artikel');  // Redirect ke daftar artikel
        }
    
        $title = "Edit Artikel";
        return view('artikel/form_edit', compact('title', 'data'));  // Kirim data artikel ke form
    }


    public function delete($id)
{
    $artikel = new \App\Models\ArtikelModel();

    // Periksa apakah data ada sebelum dihapus
    $data = $artikel->find($id);
    if (!$data) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Artikel dengan ID $id tidak ditemukan.");
    }

    // Hapus data
    $artikel->delete($id);

    // Redirect ke halaman admin/artikel
    return redirect()->to('/admin/artikel');
}

}    