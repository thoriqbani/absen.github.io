<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\models\absen;
use App\models\User;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('employee.home');
    }

    public function view()
    {
        return view('employee.view');
    }

    public function history()
    {
        $userId = auth()->user()->id;
    
        $posts = absen::select('absens.*', 'users.name as user_name')
        ->join('users', 'absens.user_id', '=', 'users.id')
        ->where('absens.user_id', $userId)
        ->get();
 
    return view('employee.history', [
        "title" => "History Absen",
        "posts" => $posts,

    ]);
        // return view('employee.history',[
        //     "title" => "posts",
        //     "posts" => absen::where('user_id', Auth()->User()->id)
        // ]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function search(Request $request){
        $User = User::all();
        if($request->keyword != ''){
            $User = User::where('name','LIKE','%'.$request->keyword.'%')->orWhere('NIK','LIKE','%'.$request->keyword.'%')->get();
        }
        return response()->json([
            'User' => $User
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($user)
    {
    date_default_timezone_set("Asia/Jakarta");
    $tanggal = date('Y-m-d');
    $userAbsen = absen::find(absen::where('user_id', $user)->whereDate('tglMasuk', $tanggal)->first());

    if ($userAbsen) {
        return redirect('/dashboard')->with('status', 'Anda sudah absen hari ini!!!');
    } else {
        $absen = new absen;
        $absen->tglMasuk = date('Y-m-d');
        $absen->jamMasuk = date('H:i:s');
        $absen->user_id = $user;
        
        if ($absen->save()) {
            return redirect()->intended('/dashboard');
        }
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
