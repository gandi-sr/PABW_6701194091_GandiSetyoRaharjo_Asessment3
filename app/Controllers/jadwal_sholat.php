<?php

namespace App\Controllers;

use App\Models\Adminmodels;

class jadwal_sholat extends BaseController
{
    public function index()
    {
        $jadwalsolat = new Adminmodels();

        $data = [
            'title' => 'Daftar Jadwal Solat',
            'jadwal_solat'  => $jadwalsolat->findAll(),
        ];
        return view('jadwal_sholat/index', $data);
    }

    public function create()
    {
        $model = new Adminmodels();

        $data = array(
            'title'     => 'Tambah Djadwal',
        );
        echo view('jadwal_sholat/create', $data);
    }


    public function edit($id = null)
    {
        $model = new Adminmodels();
        $data = array(
            'title'     => 'Ubah jadwal',
            'jadwal_solat'      => $model->where('id', $id)->first()
        );
        echo view('jadwal_sholat/edit', $data);
    }

    public function delete($id = null)
    {
        $model = new Adminmodels();
        $status = $model->where('id', $id)->delete($id);

        if ($status) {
            session()->setFlashdata('message_success', 'Data berhasil dihapus!');
        } else {
            session()->setFlashdata('message_danger', 'Data gagal dihapus!');
        }

        return redirect()->to(base_url('jadwal_sholat'));
    }
}
