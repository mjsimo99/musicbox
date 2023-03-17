<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Song;
use App\Models\SongRating;
use Illuminate\Support\Facades\Auth;


class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $songs = Song::all();
        return response()->view('home', ['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('songs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $filename = time().$request->file('cover_image')->getClientOriginalName();
        $path = $request->file('cover_image')->storeAs('images', $filename, 'public');
        $input["cover_image"] = '/storage/'.$path;

        $audioFilename = time() . $request->file('audio_file')->getClientOriginalName();
        $audioPath = $request->file('audio_file')->storeAs('audio', $audioFilename, 'public');
        $input['audio_file'] = '/storage/' . $audioPath;



        Song::create($input);
        return redirect('songs')->with('flash_message', 'Song created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $songs = Song::find($id);
        return view('songs.show')->with('songs', $songs);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



//     public function like(Request $request, $id)
// {
//     $songRating = new SongRating;
//     $songRating->song_id = $id;
//     $songRating->user_id = Auth::id();
//     $songRating->rating = 1;
//     $songRating->save();
    
//     return redirect()->back();
// }


public function like(Request $request, $id)
{
    $user_id = Auth::id();
    $songRating = SongRating::where('song_id', $id)->where('user_id', $user_id)->first();
    
    if ($songRating) {
        $songRating->delete();
    } else {
        $songRating = new SongRating;
        $songRating->song_id = $id;
        $songRating->user_id = $user_id;
        $songRating->rating = 1;
        $songRating->save();
    }
    
    return redirect()->back();
}


}

