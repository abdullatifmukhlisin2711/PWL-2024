<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        public function index(){

            $user = UserModel::firstWhere('level_id', 1);
            return view('user', ['data' => $user]);


            // $data = [
            //     'level_id' => 2,
            //     'username' => 'manager_dua',
            //     'nama' => 'Manager 2',
            //     'password' => Hash::make('12345')
            // ];
            // UserModel::create($data);      

            // UserModel::updateOrCreate(
            //     ['username' => 'manager_dua'], 
            //     [
            //         'name' => 'Manager 2',
            //         'email' => 'manager2@example.com',
            //         'password' => Hash::make('12345'),
            //         'level_id' => 2
            //     ]
                
            // );
            
        }
    }

    // public function index(){
    //     return view('blog user');
    // }

