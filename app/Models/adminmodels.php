<?php

namespace App\Models;

use CodeIgniter\Model;

class Adminmodels extends Model
{
    protected $table = 'jadwal_solat';
    protected $allowedFields = ['bulan', 'tanggal', 'subuh', 'terbit', 'duha', 'dzuhur', 'subuh', 'asar', 'magrib', 'isya'];

    public function getRandomId()
    {
        $query = $this->db->table('jadwal_solat');
        $query->select('jadwal_solat.id_jadwalsolat');
        $query->orderBy('jadwal_solat.id_jadwalsolat', 'RANDOM');
        $query->limit(1);

        $result = $query->get()->getRow();

        if (isset($result)) {
            $id = $result->id;
        } else {
            $id = 0;
        }
        return $id;
    }
}
