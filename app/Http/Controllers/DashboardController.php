<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Sewa;
use App\Models\User;
use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $paket = Paket::count();
        $sewa = Sewa::count();
        $news = News::count();
        $user = User::count();

        return view('Dashboard.index', compact('paket', 'sewa', 'news', 'user'));
    }
}
