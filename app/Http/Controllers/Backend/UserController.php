<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::simplePaginate(5);
        $name = $request->get('name');
        if (!empty($name)) {
            $users = User::where('name', 'like', "%" . $name . "%")->Paginate(6);
        }
        // $email = $request->get('email');
        // if ($email !== null) {
        //     $user = User::where('email', $email)->get();
        // }

        return view('backend.users.index')->with(['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('backend.users.create')
            ->with(['roles' => $roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validator = Validator::make(
        //     $request->all(),
        //     [
        //         'avatar' => 'required|file|mimes:jpg,png|max:24|min:20'
        //     ],
        //     [
        //         'required' => 'Trường :attribute phải nhập',
        //         'content.required' => 'Nội dung không được trống',

        //     ],
        //     [
        //         'title' => 'Tiêu đề',
        //         'content' => 'Nội dung'
        //     ]
        // );

        // if ($validator->fails()) {
        //     return redirect('backend/users/create')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        $data = $request->all();
        $roles = $request->get('roles');
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->status = $data['status'];
        $user->password = bcrypt($data['password']);
        if ($request->hasFile('avatar')) {
            $disk = 'public';
            $path = $request->file('avatar')->store('blogs', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
        $user->save();

        DB::table('user_infos')->insert([
            'user_id' => $user->id,
            'address' => $data['address'],
            'phone' => $data['phone']
        ]);
        $user->roles()->attach($roles);
        $request->session()->flash('success', 'Tạo mới người dùng thành công!');
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
        //    $posts = User::find($id)->posts()->where('status',2)->get();
        //    dd($posts);
        $user = User::find($id);
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
        $roles = Role::get();
        return view('backend.users.edit')->with([
            'user' => $user,
            'roles' => $roles
        ]);
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
        $data = $request->all();
        $roles = $request->get('roles');
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        if ($request->hasFile('avatar')) {
            $disk = 'public';
            $path = $request->file('avatar')->store('blogs', $disk);
            $user->disk = $disk;
            $user->avatar = $path;
        }
        $user->save();
        DB::table('user_infos')->where('user_id', $id)->update([
            'address' => $data['address'],
            'phone' => $data['phone']
        ]);
        $user->roles()->sync($roles);
        $request->session()->flash('success', 'Chỉnh sửa người dùng thành công!');
        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $user = User::find($id);
        if (!Gate::allows('delete-user', $user)) {
            abort(403);
        }
        User::destroy($id);
        $request->session()->flash('success', 'Xóa người dùng thành công!');
        return redirect()->route('backend.users.index');
    }

    public function delete(Request $request)
    {
        $users = User::onlyTrashed()->simplePaginate(6);
        return view('backend.users.softDelete', [
            'users' => $users
        ]);
    }

    public function restore($id)
    {
        $users = User::withTrashed()->where('id', $id)->restore();
        return redirect()->route('backend.users.delete');
    }

    public function loginWithUser($id)
    {
        Auth::loginUsingId($id);

        return redirect('backend/dashboard');
    }
}
