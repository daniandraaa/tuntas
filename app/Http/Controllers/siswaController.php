<?php

namespace App\Http\Controllers;

use App\Models\mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class siswaController extends Controller
{
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $user = User::where('username', $request->username)->first();

            if($user->role == 'siswa'){
                return redirect()->intended('/berandasiswa');
            }else{
                return redirect()->intended('/berandaguru');
            }
        }

        return back()->with('loginError', 'Username atau Password salah!');
     }

     public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
     }

     public function belumtuntas(){
        return view('siswa.belumtuntas', [
            'mapels' => mapel::all()
        ]);
     }
     public function ajukan(mapel $mapel){
        mapel::where('id', $mapel->id)->update([
            'nama_mapel' => $mapel->nama_mapel,
            'nama_guru' => $mapel->nama_guru,
            'status' => 'proses'
        ]);
        return redirect('/belumtuntas');
     }

     public function sudahtuntas(){
        return view('siswa.sudahtuntas', [
            'mapels' => mapel::all()
        ]);
     }
     public function prosespenuntasan(){
        return view('siswa.prosespenuntasan', [
            'mapels' => mapel::all()
        ]);
     }
}
