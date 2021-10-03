<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $users = User::simplePaginate(6);
        $name = $request->get('name');
        if (!empty($name)) {
            $user = User::where('name', 'like', "%" . $name . "%")->get();
        }
        $email = $request->get('email');
        if ($email !== null) {
            $user = User::where('email', $email)->get();
        }
        $users = User::orderBy('id','desc')->simplePaginate(5);
        return view('backend.users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'email', 'phone', 'address', 'password', 'avatar','status']);
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->status = $data['status'];
        $user->phone = $data['phone'];
        $user->address = $data['address'];
        $user->password = $data['password'];
        $user->avatar = $data['avatar'];
        $user->save();
        return redirect('backend/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = User::find($id);
       $userInfo = $user->userInfo;
        return view(
            'backend.users.show',
            ['user' => $user]
        );
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
        return view('backend.users.edit')->with(['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->only(['name', 'email', 'phone', 'address']);
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->phone= $data['phone'];
        $user->address= $data['address'];
        $user->save();
        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('backend.users.index');
    }
    public function delete(Request $request)
    {
        $users = User::onlyTrashed()->simplePaginate(6);
        return view('backend.users.softDelete', [
            'users'=> $users
        ]);
    }

    public function restore($id)
    {
        $users = User::withTrashed()->where('id', $id)->restore();
        return redirect()->route('backend.users.delete');
    }

}
