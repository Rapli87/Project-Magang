<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubLatestVideo;
use App\Http\Requests\Admin\SubLatestVideoRequest;
use Illuminate\Http\Request;

class SubLatestVideoController extends Controller
{
    public function index()
    {
        $sublatestVideos = SubLatestVideo::all(); // Mengambil semua latest_video dari database
        return view('pages.admin.sublatest-videos.index', compact('sublatestVideos')); // Menampilkan halaman index dengan membawa data $sublatestVideos
    }

    public function create()
    {
        return view('pages.admin.sublatest-videos.create'); // Menampilkan halaman create
    }

    public function store(SubLatestVideoRequest $request)
    {
        $sublatestVideo = new SubLatestVideo;

        // Upload file image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/sublatest-videos/images', $imageName);

            $sublatestVideo->image = 'storage/admin/sublatest-videos/images/' . $imageName;
        }

        // Set other fields
        $sublatestVideo->url = $request->input('url');
        $sublatestVideo->title = $request->input('title');
        $sublatestVideo->date = $request->input('date');
        $sublatestVideo->rate = $request->input('rate');

        $sublatestVideo->save();

        return redirect()->route('sublatest-videos.index')->with('success', 'Sub Latest video berhasil ditambahkan.');
    }

    public function edit(SubLatestVideo $sublatestVideo)
    {
        return view('pages.admin.sublatest-videos.edit', compact('sublatestVideo'));
    }

    public function update(SubLatestVideoRequest $request, SubLatestVideo $sublatestVideo)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/admin/sublatest-videos/images', $imageName);

            $sublatestVideo->image = 'storage/admin/sublatest-videos/images/' . $imageName;
        }

        $sublatestVideo->url = $request->input('url');
        $sublatestVideo->title = $request->input('title');
        $sublatestVideo->date = $request->input('date');
        $sublatestVideo->rate = $request->input('rate');
        
        $sublatestVideo->save();

        return redirect()->route('sublatest-videos.index')->with('success', 'Sub Latest video berhasil diperbarui.');
    }

    public function destroy(SubLatestVideo $sublatestVideo)
    {
        $sublatestVideo->delete();
        return redirect()->route('sublatest-videos.index')->with('success', 'Sub Latest video berhasil dihapus.');
    }
}
