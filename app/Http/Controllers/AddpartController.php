<?php

namespace App\Http\Controllers;
use App\Models\Part;
use Illuminate\Http\Request;


class AddpartController extends Controller
{
    // protected $table = "part";
    public function index ()
    {
        $parts = Part::all();
        return view('pladmin.addpart', compact('parts'));
    }

    public function store (Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'partout' => 'required|string|unique:parts,partnis',
            'parttru' => 'required|string|unique:parts,parttru',
            'partname' => 'required|string',
            'snp' => 'required|integer',
        ]);

        // Additional validation to ensure that each input has a value
        $this->validate($request, [
            'type' => 'required',
            'partout' => 'required',
            'parttru' => 'required',
            'partname' => 'required',
            'snp' => 'required',
        ]);

        // You may also want to validate the user input further before storing it in the database.

        Part::create([
            'type' => $request->input('type'),
            'partnis' => $request->input('partout'),
            'parttru' => $request->input('parttru'),
            'partname' => $request->input('partname'),
            'snp' => $request->input('snp'),
            'user_id' => auth()->id(), // Assuming you are using Laravel's authentication system
        ]);

        return redirect()->route('addpart')->with('success', 'Data stored successfully.');
    }
}
