<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $user = User::findOrFail($id);
        return view('profile.local.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update',$user->profile);
        return view('profile.local.edit', compact('user'));

    }
    public function update(User $user){
        $this->authorize('update', $user->profile);

        $data = request()->validate(
            [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'menu' => 'required',
            'image' => '',
            ]
        );
        if(request('image')){
            $imagePath = request('image')->store('profile','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(400,300);
            $image->save();
            $imageArray = ['image'=>$imagePath];
        }
        
        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));
        return redirect("/profile/local/{$user->id}");
    }
}
