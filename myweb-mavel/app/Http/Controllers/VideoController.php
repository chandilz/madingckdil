<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('settings.video');
    }

    public function upload(Request $request)
    {
        $videoFile = $request->file('video');
        $videoName = uniqid('video_') . '.' . $videoFile->getClientOriginalExtension();
        $videoFile->move(public_path('video'), $videoName);

        if ($videoFile) {
            // Untuk DB
            // $filePath = 'video/' . $videoName;
            // VideoModel::create(['file_path' => $filePath]);
            return redirect()->back()->with('success', 'Video uploaded successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to upload video. Please try again.');
        }   

    }
}