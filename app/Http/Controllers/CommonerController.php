<?php

namespace App\Http\Controllers;
use App\Models\NissanIssue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class CommonerController extends Controller
{
    public function index(){

        $fails = Nissanissue::with(['user' => function ($query) {
            $query->latest();
        }])->where('user_id', auth()->id())->latest()->take(1)->get();

        return view('commoner.preventcom',compact('fails'));
    }
    

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'description' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();

        if($user && Hash::check($request->password,$user->password)&& in_array('plAdmin', $user->getRoleNames()->toArray()) || in_array('superAdmin', $user->getRoleNames()->toArray()))
        {
            $nissanIssue = NissanIssue::where('user_id', auth()->id())->latest()->take(1)->first();
            $nissanIssue->update([
                    'description' => $request->description,
                    'approval' => $user->name,
                ]);
            $userId = Auth::id();
            $user = User::find($userId);
            // $role = Role::findOrCreate('plAdmin');
            $user->syncRoles('scanner');
    
            return redirect()->route('scanner')->with('success','You are now Scanner');
        }
        else{
            return redirect()->route('commoner')->with('fail','username or password are incorrect');
        }
    }
}


