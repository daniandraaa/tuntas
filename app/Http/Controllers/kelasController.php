<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use App\Models\mapel;
use App\Models\User;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function detailkelassepuluh(){
        return view('guru.detailkelas', [
            'kelass' => kelas::all()
        ]);
     }
    public function detailkelassebelas(){
        return view('guru.detailkelassebelas', [
            'kelass' => kelas::all()
        ]);
     }
    public function detailkelasduabelas(){
        return view('guru.detailkelasduabelas', [
            'kelass' => kelas::all()
        ]);
     }
    public function detailsiswa(kelas $kelas){
        return view('guru.detailsiswa', [
            'users' => User::all()
        ]);
     }
       public function tolak(User $user){
        User::where('id', $user->id)->update([
            'nama_lengkap' => $user->nama_lengkap,
            'kelas' => $user->kelas,
            'username' => $user->username,
            'password' => $user->password,
            'role' => $user->role,
            'status' => 'tolak'
        ]);
        return redirect('/detailsiswa');
     }
       public function terima(User $user){
        User::where('id', $user->id)->update([
            'nama_lengkap' => $user->nama_lengkap,
            'kelas' => $user->kelas,
            'username' => $user->username,
            'password' => $user->password,
            'role' => $user->role,
            'status' => 'terima'
        ]);
        return redirect('/detailsiswa');
     }
}
