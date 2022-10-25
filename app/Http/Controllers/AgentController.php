<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::where('id', '!=', Auth::id())->get();

        return view('backend.agents.index', [
            'agents' => $agents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();



        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('agents/', $filename);

            $data['image'] = $path;
        }

        User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'image' => $data['image'],
            'description' => $data['description'],
            'phone' => $data['phone'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
            'password' => Hash::make($data['password'])

        ]);

        return redirect()->route('agents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.agents.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);

        $data = $request->validated();

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $filename = time() . $file->getClientOriginalName();

            $path = $file->storeAs('agents/', $filename);

            $data['image'] = $path;
        }

        $user->update([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'role' => $data['role'],
            'image' => $data['image'],
            'description' => $data['description'],
            'phone' => $data['phone'],
            'facebook' => $data['facebook'],
            'instagram' => $data['instagram'],
            'twitter' => $data['twitter'],
            'linkedin' => $data['linkedin'],
            'password' => Hash::make($data['password'])

        ]);

        return redirect()->route('agents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('agents.index');
    }
}
