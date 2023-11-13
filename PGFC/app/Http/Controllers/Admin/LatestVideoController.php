<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LatestVideo;
use App\Http\Requests\Admin\LatestVideoRequest;
use Illuminate\Http\Request;

class LatestVideoController extends Controller
{
    public function index()
    {
        $latestVideos = LatestVideo::all(); // Mengambil semua latest_video dari database
        return view('pages.admin.latest-videos.index', compact('latestVideos')); // Menampilkan halaman index dengan membawa data $latestVideos
    }

    public function create()
    {
        return view('pages.admin.latest-videos.create'); // Menampilkan halaman create
    }

    public function store(LatestVideoRequest $request)
    {
        $latestVideo = new LatestVideo;

        // Upload file thumbnail
        if ($request->hasFile('thumbnail')) {
            $thumbnailImage = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnailImage->getClientOriginalExtension();
            $thumbnailImage->storeAs('public/admin/latest-videos/thumbnails', $thumbnailName);

            $latestVideo->thumbnail = 'storage/admin/latest-videos/thumbnails/' . $thumbnailName;
        }

        // Set other fields
        $latestVideo->url = $request->input('url');
        $latestVideo->save();

        return redirect()->route('latest-videos.index')->with('success', 'Latest video berhasil ditambahkan.');
    }

    public function edit(LatestVideo $latestVideo)
    {
        return view('pages.admin.latest-videos.edit', compact('latestVideo'));
    }

    public function update(LatestVideoRequest $request, LatestVideo $latestVideo)
    {
        if ($request->hasFile('thumbnail')) {
            $thumbnailImage = $request->file('thumbnail');
            $thumbnailName = time() . '.' . $thumbnailImage->getClientOriginalExtension();
            $thumbnailImage->storeAs('public/admin/latest-videos/thumbnails', $thumbnailName);

            $latestVideo->thumbnail = 'storage/admin/latest-videos/thumbnails/' . $thumbnailName;
        }

        $latestVideo->url = $request->input('url');
        $latestVideo->save();

        return redirect()->route('latest-videos.index')->with('success', 'Latest video berhasil diperbarui.');
    }

    public function destroy(LatestVideo $latestVideo)
    {
        $latestVideo->delete();
        return redirect()->route('latest-videos.index')->with('success', 'Latest video berhasil dihapus.');
    }
}
