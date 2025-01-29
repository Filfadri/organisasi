<?php

namespace App\Controllers;

use App\Models\OrganisasiModel;
use CodeIgniter\Controller;

class Organisasi extends Controller
{
    protected $organisasiModel;

    public function __construct()
    {
        $this->organisasiModel = new OrganisasiModel();
    }

    public function index()
    {
        $data['organisasi'] = $this->organisasiModel->findAll();
        return view('organisasi/index', $data);
        return view('home');

    }

    public function add()
    {
        return view('organisasi/add');
    }

    public function save()
    {
        $this->organisasiModel->save([
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'umur' => $this->request->getPost('umur'),
        ]);

        return redirect()->to('/organisasi');
    }

    public function detail($id)
    {
        $data['organisasi'] = $this->organisasiModel->find($id);
        return view('organisasi/detail', $data);
    }

    public function edit($id)
    {
        $data['organisasi'] = $this->organisasiModel->find($id);
        return view('organisasi/edit', $data);
    }

    public function update($id)
    {
        $this->organisasiModel->update($id, [
            'nama' => $this->request->getPost('nama'),
            'nim' => $this->request->getPost('nim'),
            'jurusan' => $this->request->getPost('jurusan'),
            'umur' => $this->request->getPost('umur'),
        ]);

        return redirect()->to('/organisasi');
    }

    public function delete($id)
    {
        $this->organisasiModel->delete($id);
        return redirect()->to('/organisasi');
    }
}