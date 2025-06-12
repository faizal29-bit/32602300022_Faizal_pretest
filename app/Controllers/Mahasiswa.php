<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class Mahasiswa extends Controller
{
    public function insert()
    {
        $db = \Config\Database::connect();
        $data = [
            'nim'   => '32602300023',
            'nama'  => 'FANI AGUS TINA',
            'prodi' => 'Teknik Informatika'
        ];
                $builder = $db->table('tb_mahasiswa');
        $builder->insert($data);
        return redirect()->to('/mahasiswa/show');
    }
    public function show()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('tb_mahasiswa');
        $query = $builder->get();
        
        $data['mahasiswa'] = $query->getResult();
                return view('mahasiswa_view', $data);
    }
}
