<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        public function index(){

            $data = [
                'level_id' => 2,
                'username' => 'manager_dua',
                'nama' => 'Manager 2',
                'password' => Hash::make('12345')
            ];
            UserModel::create($data);

            $user = UserModel::all();
            return view('user',['data' => $user]);
        }
    }

    // public function index(){
    //     return view('blog user');
    // }

