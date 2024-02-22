<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Pengaduan;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'activities' => Activity::latest()->get(),
            'CountActivites' => Activity::count(),
            'countUsers' => User::where('role', 'user')->count(),
            'countPetugas' => User::where('role', 'petugas')->count(),
            'countPengaduan' => Pengaduan::count(),
        ];

        return view('backend.pages.dashboard', $data);
    }
}
