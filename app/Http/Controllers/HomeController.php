<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Presen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $guru = Guru::count();
        $presen = Presen::count();
        if($user = Auth::user()){
            if($user->level == 'admin'){
                return view('admin.index', compact('guru', 'presen'));
            }elseif ($user->level == 'guru'){
                return view('guru.index', compact('guru', 'presen'));
            }
        }
    }
}
