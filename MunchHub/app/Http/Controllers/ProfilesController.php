<?php

namespace App\Http\Controllers;

use App\User;
use App\Vendortype;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(\App\User $user)
    {
     return view('profiles.index',compact('user'));
    }

    public function edit(\App\User $user){

        $this->authorize('update',$user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user){

        $this->authorize('update',$user->profile);
        $data = request()->validate([
            'tags' => '',
            'profile_text' => 'required',
            'url' => 'URL|nullable',
            'image' => '',
        ]);
        if (request('image')){
            $imagepath =request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/{$imagepath}"))->fit(1000, 1000);
            $image->save();
            $imageArray = ['image' => $imagepath];
        }
            auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/{$user->id}");
    }
    public function filter(Request $request, \App\User $user, \App\Vendortype $vendortype){
        $users = User::all();
        $vendortype = Vendortype::all();
        if ($request->has('vtype')){


            $users = User::all()->where('v_type_id', '==', Vendortype::where('name', $request->get('vtype'))->first()->id);

            return view('profiles.profiles', compact('users'));
        }

        return view('profiles.profiles', compact('users'));
    }
}
