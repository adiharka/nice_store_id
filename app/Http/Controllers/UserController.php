<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit(){
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    public function update(Request $request){
        $user = User::findOrFail(Auth::user()->id);

        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);

        if($request->hasFile('image')){
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            $image = $request->file('image');
            $imageName = time().'.'.$request->image->extension();
            $path = $image->storeAs('uploads', $imageName, 'public');
            $user->image = '/storage/'.$path;
        }

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        return redirect()->route('dashboard')->with('success', 'Profile updated successfully');
    }

    public function password(){
        $user = Auth::user();

        return view('profile.password', compact('user'));
    }

    public function changePassword(Request $request){
        $user = User::findOrFail(Auth::user()->id);

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|same:new_password',
        ]);

        if((Hash::check(request('old_password'), auth()->user()->password)) == false){
            return back()->withErrors(['old_password' => 'Your old password is wrong!']);
        }
        else if ((Hash::check(request('new_password'), auth()->user()->password)) == true) {
            return back()->withErrors(['new_password' => 'Please enter a password which is not the exact current password.']);
        }
        else
        $user->password = Hash::make($request->new_password);
        $user->save();
        
        return redirect()->route('dashboard')->with('success', 'The password has been changed successfully!');
    }
}
