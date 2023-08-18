<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nisn' => 'required',
            'jurusan' => 'required',
            'kelas' => 'required',
            'jenis_kelamin' => 'required',
            'game' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Insert data into the database
        DB::table('register')->insert([
            'nama' => $request->nama,
            'nisn' => $request->nisn,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'game' => $request->game,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/register')->with('success', 'Registration successful');
    }
}
