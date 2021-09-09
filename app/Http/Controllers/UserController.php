<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role_id' => 'required|string|max:2',
            'nickname' => 'string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'role_id'=>$request->role_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));

        event(new Registered($user));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userx = user::find($id);
        $users = user::all()->sortByDesc('id');
        return view('user.users', compact('userx','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userx = user::find($id);
        $users = user::all()->sortByDesc('id');
        return view('user.users', compact('userx','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function imageCrop(Request $request)
    {
        $image_file = $request->image;
        list($type, $image_file) = explode(';', $image_file);
        list(, $image_file)      = explode(',', $image_file);
        $image_file = base64_decode($image_file);
        $image_name = $request->id . '.png';
        $path = public_path('files/profil/' . $image_name);

        file_put_contents($path, $image_file);
        return response()->json(['status' => true]);
    }

    public function update(Request $request, $id)
    {
        $user = user::find($id);
        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'role_id' => $request->role_id,
            'email' => $request->email,
            'image' => $user->id.'.png',
            'password' => Hash::make($request->password),
        ]);
        return Redirect::back()->with('message', 'les modifications ont été faits avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
