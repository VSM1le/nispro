<?php

namespace App\Http\Controllers;

use App\Exports\DataExport;
use Illuminate\Http\Request;
use App\Models\NissanIssue;
use Maatwebsite\Excel\Facades\Excel;

class PladminController extends Controller
{
    public function index()
    {
        $nissans = Nissanissue::latest()->get();

        return view('pladmin.history', compact('nissans'));

    }

    public function export()
    {
        return Excel::download(new DataExport, 'users.xlsx');
    }
}
