<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Photo, Category};
use Illuminate\Support\Facades\Gate;

class PhotoController extends Controller
{
    //sites
    public function show()
    {
        return view('sites.foto', [
            'photos' => Photo::latest()->paginate(4),
        ]);
    }


    public function index(Photo $photo)
    {
        $photos = Photo::latest()->paginate(2);
        return view('admin.photo.index', compact('photos', 'photo'));
    }

    public function create()
    {
        if (Gate::any(['isAdmin', 'isCreator'])) {
            return view('admin.photo.create', [
                'categories' => Category::get(),
            ]);
        } else {
            return abort(404);
        }
    }

    public function store()
    {
        //Validasi
        $attr = $this->requestValidate();
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;
        $thumbnail = request()->file('thumbnail') ? request()->file('thumbnail')->store("images/photo") : null;
        //merubah title menjadi slug
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;

        //buat baru konten video
        $photo = Photo::create($attr);
        //pesan flash message
        session()->flash('success', 'Photo Baru telah dibuat');

        return redirect()->to('/admin/photo');
    }

    public function edit(Photo $photo)
    {
        if (Gate::any(['isAdmin', 'isCreator'])) {
            return view('admin.photo.edit', [
                'photo' => $photo,
                'categories' => Category::get(),
            ]);
        } else {
            return abort(404);
        }
    }

    public function update(Photo $photo)
    {
        //validasi
        $attr = $this->requestValidate();
        if (request()->file('thumbnail')) {
            \Storage::delete($photo->thumbnail);
            $thumbnail = request()->file('thumbnail')->store("images/photo");
        } else {
            $thumbnail = $photo->thumbnail;
        }
        //memasukkan database update
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnail;
        // menyimpan data update
        $photo->update($attr);

        session()->flash('success', 'Photo Telah terupdate');
        return redirect()->to('/admin/photo');
    }

    public function destroy(Photo $photo)
    {
        \Storage::delete($photo->thumbnail);
        $photo->delete();

        session()->flash('success', 'Photo Telah dihapus');
        return redirect()->to('/admin/photo');
    }


    public function requestValidate()
    {
        return request()->validate([
            'thumbnail' => 'image|mimes:jpeg, jpg, png, svg, PNG, JPEG|max:2048',
            'title' => 'required|min:3',
            'category' => 'required',
        ]);
    }
}
