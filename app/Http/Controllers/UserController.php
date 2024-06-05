<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        if (auth()->id() !== $user->id) {
            abort(403);
        }

        return view('users.show', compact('user'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
        $editing = true;
        return view('users.edit', compact('user', 'editing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        //
        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'bio' => 'nullable|min:1|max:355',
                'image' => 'image',
                'alamat' => 'required|min:1|max:355',
                'nohp' => 'required|min:11|max:13',
                'tanggal_lahir'=> 'required',
                'asalsekolah'=> 'required',
                'kelas'=> 'required|max:20',
                'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],


            ]
        );


        if (request()->has('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;

            Storage::disk('public')->delete($user->image);
        }

        $user->update($validated);

        return redirect()->route('users.show', compact('user'));
    }

    // public function profile(){
    //     return $this->show(auth()->id());
    // }
}
