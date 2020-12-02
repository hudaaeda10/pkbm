<?php

namespace App\Http\Controllers;

use App\{Article, User};
use App\Category;
use Illuminate\Http\Request;
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
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->name,
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
        $user = User::findOrFail($iduser);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $iduser)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'role' => 'required'
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
}
