<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        $save = Storage::disk('public')->put('file.txt', 'Contents');
        dd($save);
        return view('backend.dashboard');
    }
}
