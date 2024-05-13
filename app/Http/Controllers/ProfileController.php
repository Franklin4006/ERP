<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.profile');
    }
    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:rfc,dns',
            'mobile_no' => 'required|min:10|numeric',
        ]);
        $email = auth()->user()->email;

        $user = User::where('email', $email)->first();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile_no = $request->mobile_no;

        if ($request->file('profile_photo')) {
            $profile_photo = time() . '.' . $request->profile_photo->extension();
            $request->profile_photo->move(public_path('uploads/profile_photo'), $profile_photo);

            $user->profile = $profile_photo;
        }

        $user->save();

        return array("success" => "1", "message" =>  "Profile Updated successfully");
    }
}
