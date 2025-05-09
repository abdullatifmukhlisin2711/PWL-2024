<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
     public function index(){
        DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?,?,?)', ['CUS', 'Pelanggan', now()]);
        return 'insert data baru berhasil';

      $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['customer', 'CUS']);
      return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . 'baris';

      $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
      return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . 'baris';

      $data = DB::select('select *from m_level');
      return view('level', ['data' => $data]);


     return view('level', ['data' => $data]);


      
//     'level_id' => 2,
//     'username' => 'manager_dua',
//     'nama' => 'Manager 2',
//     'password' => Hash::make('12345')
// ];
// UserModel::create($data);      


// $user = UserModel::all();
return view('user',['data' => $user]);
     }
}
