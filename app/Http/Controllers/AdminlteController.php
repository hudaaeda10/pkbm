<?php

namespace App\Http\Controllers;

use App\{Article, User};
use App\Category;
use App\Http\Requests\UpdatePasswordRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminlteController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'articles' => Article::latest()->paginate(12),
        ]);
    }

    // data user
    public function index()
    {
        if (Gate::allows(['isAdmin'])) {
            $users = User::all();
            return view('admin.user.index', compact('users'));
        } else {
            return abort(404);
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => strtolower($request->name),
            'email' => $request->email,
            'password' => bcrypt(request('password')),
            'role' => $request->role,
            'remember_token' => Str::random(60),
        ]);

        session()->flash('success', 'User Baru telah dibuat');
        return redirect()->to('/user');
    }

    public function edit($iduser)
    {
        if (Gate::allows(['isAdmin'])) {
            $user = User::findOrFail($iduser);
            return view('admin.user.edit', compact('user'));
        } else {
            return abort(404);
        }
    }

    public function update(Request $request, $iduser)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
        ]);
        $user = User::findOrFail($iduser);
        $user->update($request->all());
        session()->flash('success', 'User telah diedit');
        return redirect()->to('/user');
    }

    public function destroy($iduser)
    {
        User::findOrFail($iduser)->delete();
        session()->flash('delete', 'User telah dihapus');
        return redirect()->to('/user');
    }

    // merubah password
    public function changePassword($iduser)
    {
        if (Gate::allows(['isAdmin'])) {
            $user = User::findOrFail($iduser);
            return view('admin.user.password', compact('user'));
        } else {
            return abort(404);
        }
    }

    public function updatePassword(Request $request, $iduser)
    {
        $this->validate($request, ['password' => 'required|string']);
        $user = User::findOrFail($iduser);
        $user->update([
            'password' => Hash::make($request->get('password'))
        ]);
        // session()->flash('success', 'Password telah diedit');
        return redirect()->to('/user');
    }
}
