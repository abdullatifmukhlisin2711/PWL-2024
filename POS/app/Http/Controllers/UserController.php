<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        public function index(){
            $user = UserModel::all();
            return view('user', ['data' => $user]);



                 }
                }

                            // $user = UserModel::create([
            //     'username' => 'manager11',   
            //     'nama' => 'Manager11',
            //     'password' => Hash::make('12345'),
            //     'level_id' => 2,

            // ]);

            // $user ->username = 'manager12';

            // $user->save();

            // $user->wasChanged();
            // $user->wasChanged(['username']);
            // $user->wasChanged(['username', 'level_id']);
            // $user->wasChanged(['nama']);
            // dd($user->wasChanged(['nama', 'username']));


            // $user =UserModel::create([
            //     'username' => 'manager44',
            //     'nama' => 'Manager44',
            //     'password' => Hash::make('12345'),
            //     'level_id' => 2,
            // ]);
            // $user->username = 'manager45';

            // $user->isDirty();
            // $user->isDirty('username');
            // $user->isDirty('nama');
            // $user->isDirty('nama', 'username');

            // $user->isClean();
            // $user->isClean('username');
            // $user->isClean('nama');
            // $user->isClean('nama', 'username');

            // $user->save();

            // $user->isDirty();
            // $user->isClean();
            // dd($user->isDirty());

                            // $user = UserModel::firstOrNew(
            //     [
            //         'username' => 'manager33',
            //         'nama' => 'Manager Tiga Tiga',
            //         'password' => Hash::make('12345'),
            //         'level_id' => 2
            //     ],
            //     );
            //     $user->save();

            //     return view('user', ['data' =>$user]);

                             // $user = UserModel::firstOrCreate(
            //     [
            //         'username' => 'manager22',
            //         'nama' => 'Manager Dua Dua',
            //         'password' => Hash::make('12345'),
            //         'level_id' => 2
            //     ],
            //     );
            //     return view('user', ['data' => $user]);
    
                // $user = UserModel::FirstOrNew(
            //     [
            //         'Username' => 'manager',
            //         'nama' => 'Manager',
            //     ]
            //     );

                    // $user = UserModel::where('level_id', 2)->count( );
            // dd($user);

            // return view('user', ['data' => $user]);


            //      $data = [
            //     'level_id' => 3,
            //     'username' => 'manager_tiga',
            //     'nama' => 'Manager 3',
            //     'password' => Hash::make('12345')
            // ]; 

            // $user = UserModel::firstWhere('level_id', 1);
            // return view('user', ['data' => $user]);


            //      $data = [
            //     'level_id' => 2,
            //     'username' => 'manager_tiga',
            //     'nama' => 'Manager 3',
            //     'password' => Hash::make('12345')
            // ];
            // UserModel::create($data);      

            // $user = UserModel::all();
            // return view('user', ['data' => $user]);



            // UserModel::updateOrCreate(
            //     ['username' => 'manager_dua'], 
            //     [
            //         'name' => 'Manager 2',
            //         'email' => 'manager2@example.com',
            //         'password' => Hash::make('12345'),
            //         'level_id' => 2
            //     ]
                
            // );
            
   
    // public function index(){
    //     return view('blog user');
    // }

