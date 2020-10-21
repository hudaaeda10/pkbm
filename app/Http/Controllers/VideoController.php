<?php

namespace App\Http\Controllers;

use App\Category;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    // Site
    public function show()
    {
        return view('sites.video', [
            'videos' => Video::latest()->paginate(8),
        ]);
    }

    //Admin
    public function index(Video $video)
    {
        $videos = Video::latest()->paginate(2);
        return view('admin.video.index', compact('videos', 'video'));
    }

    public function create()
    {
        return view('admin.video.create', [
            'categories' => Category::get(),
        ]);
    }

    public function store()
    {
        //Validasi
        $attr = $this->requestValidate();
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;
        //merubah title menjadi slug
        $attr['category_id'] = request('category');
        $attr['user_id'] = 1;

        //buat baru konten video
        $video = Video::create($attr);
        //pesan flash message
        session()->flash('success', 'Video Baru telah dibuat');

        return redirect()->to('/admin/video');
    }

    public function update(Video $video)
    {
        //validasi
        $attr = $this->requestValidate();
        //memasukkan database update
        $attr['category_id'] = request('category');
        // menyimpan data update
        $video->update($attr);

        session()->flash('success', 'Video Telah terupdate');
        return redirect()->to('/admin/video');
    }

    public function edit(Video $video)
    {
        return view('admin.video.edit', [
            'video' => $video,
            'categories' => Category::get(),
        ]);
    }

    public function destroy(Video $video)
    {
        $video->delete();
        session()->flash('success', 'Video Telah dihapus');
        return redirect()->to('/admin/video');
    }


    public function requestValidate()
    {
        return request()->validate([
            'thumbnail' => 'image|mimes:jpeg, jpg, png, svg, PNG, JPEG|max:2048',
            'title' => 'required|min:3',
            'alamat_url' => 'required',
            'category' => 'required',
        ]);
    }
}
