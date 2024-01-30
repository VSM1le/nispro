<?php

namespace App\Http\Controllers;
use App\Models\NissanIssue;
use App\Models\Part;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class ScanController extends Controller
{
    protected $table = 'nissanissue';
    public function index()
    {
        $nissans = Nissanissue::where('user_id',auth()->id())->latest()->get();
        

        return view('scanner.scanissue', compact('nissans'));
    }

    public function scan(Request $request)
    {
        $request->validate([
            'issueno' => 'required|string',
            'quality' => 'required|string',
            'partout' => 'required|string',
            'parttru' => 'required|string'
        ]);

        $cleanedIssueno = substr($request->input('issueno'), 1);
        $cleanedpartout = substr($request->input('partout'), 1);
        $cleanedQuality = (int) preg_replace('/[^\d]/', '', $request->input('quality'));
        $duplicateIssueNumber =  NissanIssue::whereIn('issueno', (array) $cleanedIssueno)->where('check','Pass')->exists();
        $partCheck = Part::whereIn('partnis',(array)$cleanedpartout)->where('parttru',(array)$request->input('parttru'))->exists();

        if ($duplicateIssueNumber && !$partCheck){
            NissanIssue::create([
                'issueno' => $cleanedIssueno,
                'quality' => $cleanedQuality,
                'partout' => $cleanedpartout,
                'parttru' => $request->input('parttru'),
                'check' => 'PaIs',
                'user_id' => auth()->id(),
            ]);
            $userId = Auth::id();
            $user = User::find($userId);
            $role = Role::findOrCreate('commoner');
            $user->syncRoles($role);
            return redirect()->route('commoner')->with('success', 'dulicate Issue and wrong part');
        }
        elseif ($duplicateIssueNumber){
            NissanIssue::create([
                'issueno' => $cleanedIssueno,
                'quality' => $cleanedQuality,
                'partout' => $cleanedpartout,
                'parttru' => $request->input('parttru'),
                'check' => 'Issue',
                'user_id' => auth()->id(),
            ]);
            $userId = Auth::id();
            $user = User::find($userId);
            $role = Role::findOrCreate('commoner');
            $user->syncRoles($role);
           
            return redirect()->route('commoner')->with('success', 'dulicate Issue');
        }
        elseif (!$partCheck){
            NissanIssue::create([
                'issueno' => $cleanedIssueno,
                'quality' => $cleanedQuality,
                'partout' => $cleanedpartout,
                'parttru' => $request->input('parttru'),
                'check' => 'Part',
                'user_id' => auth()->id(),
            ]);
            $userId = Auth::id();
            $user = User::find($userId);
            $role = Role::findOrCreate('commoner');
            $user->syncRoles($role);
            return redirect()->route('commoner')->with('success', 'Wrong part');
        }
        else{
            NissanIssue::create([
                'issueno' => $cleanedIssueno,
                'quality' => $cleanedQuality,
                'partout' => $cleanedpartout,
                'parttru' => $request->input('parttru'),
                'check' => 'Pass',
                'user_id' => auth()->id(),
            ]);
            return redirect()->route('scanner')->with('success', 'successful correct data');
            // dump('Yeah');
        }
    } 
}
