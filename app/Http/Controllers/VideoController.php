<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Course;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Course $course)
    {
        return view("Teacher/Pages/upload-video", compact("course"));
    }

    public function videoPage(Course $course)
    {
        $videos=Video::where('course_id', $course->id)->get();
        return view("Teacher/Pages/video-page", compact("videos", "course"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Course $course)
    {
        $data = $request->validate([
            "video_title" => "required|max:255",
            "video_description" => "required|max:255",
            "video_thumbnail" => "required",
            "video_file" => "required",
        ]);

        $thumbnail = $request->file("video_thumbnail");
        $data["video_thumbnail"] = Str::uuid(). '.' .$thumbnail->getClientOriginalExtension();
        $thumbnail->move("Thumbnails", $data["video_thumbnail"]);

        $video = $request->file("video_file");
        $data["video_file"] = Str::uuid(). '.' .$video->getClientOriginalExtension();
        $video->move("Videos", $data["video_file"]);

        Video::create([
            "video_title" => $data["video_title"],
            "video_description" => $data["video_description"],
            "video_thumbnail" => $data["video_thumbnail"],
            "video_file" => $data["video_file"],
            "course_id" => $course->id,
        ]);

        return redirect(url("video-page/$course->id"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view("Teacher/Pages/edit-video", compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $data = $request->validate([
            "video_title" => "required|max:50",
            "video_description" => "required",
            "video_thumbnail" => "required",
            "video_file" => "required",
        ]);

        if( $request->file("video_thumbnail") ){

            //delete old file from dir
            File::delete('Thumbnails/'.$video->video_thumbnail);

            // put new file in dir
            $file = $request->file('video_thumbnail');
            $data['video_thumbnail'] = Str::uuid(). '.' .$file->getClientOriginalExtension();
            $file->move('Thumbnails/', $data['video_thumbnail']);
        }

        if( $request->file("video_file") ){

            //delete old file from dir
            File::delete('Videos/'.$video->video_file);

            // put new file in dir
            $file = $request->file('video_file');
            $data['video_file'] = Str::uuid(). '.' .$file->getClientOriginalExtension();
            $file->move('Videos/', $data['video_file']);
        }

        $video->update($data);

        return redirect(url("video-page/$video->course_id"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if(File::exists('Thumbnails/'.$video->video_thumbnail)) {
            File::delete('Thumbnails/'.$video->video_thumbnail);
        }

        if(File::exists('Videos/'.$video->video_file)) {
            File::delete('Videos/'.$video->video_file);
        }

        $id=$video->course_id;

        $video->delete();

        return redirect(url("video-page/$id"));
    }
}
