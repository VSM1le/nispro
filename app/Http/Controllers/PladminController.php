<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NissanIssue;

class PladminController extends Controller
{
    public function index()
    {
        $nissans = Nissanissue::latest()->get();

        return view('pladmin.history', compact('nissans'));

    }
}
