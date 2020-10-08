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
            'videos' => Video::paginate(8),
        ]);
    }

    //Admin
    public function index()
    {
        return view('admin.video.index', [
            'videos' => Video::latest()->paginate(4),
        ]);
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

        //merubah title menjadi slug
        $attr['slug'] = \Str::slug(request('title'));
        $attr['category_id'] = request('category');

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
            'title' => 'required|min:3',
            'alamat_url' => 'required',
            'category' => 'required',
        ]);
    }
}
