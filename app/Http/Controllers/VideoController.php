<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::all();

        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
    
        $video = new Video;
        $video->title = $request->title;
    
        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos', ['disk' => 'public']);
            $video->video = $path;
        }
    
        $video->save();
    
        return redirect()->route('videos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'video' => 'file|mimetypes:video/mp4',
        ]);

        $video->title = $request->title;

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('videos');
            $video->video = $path;
        }

        $video->save();

        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index');
    }
}
