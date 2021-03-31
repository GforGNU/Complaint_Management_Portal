<?php

namespace App\Http\Controllers;

use App\ComplaintPost;
use Illuminate\Http\Request;

class ComplaintPostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showall()
    {
        $this->authorize('create', ComplaintPost::class);
        $complaints = ComplaintPost::all();
        return view('dashboard.complaints', compact('complaints'));
    }
    public function index()
    {
        //
        $post = auth()->user()->posts;
        return view('user_complaints', compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post_complaint');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //


        $attributes = request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'service' => ['required'],
            'is_urgent' => [''],
        ]);

        ComplaintPost::create($attributes + ['user_id' => auth()->id()]);

        return redirect ('/complaintPosts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplaintPost  $complaintPost
     * @return \Illuminate\Http\Response
     */
    public function show(ComplaintPost $complaintPost)
    {
        //
        abort_if($post->user_id !== auth()->id(), 403);
        return view('user_complaints', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplaintPost  $complaintPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplaintPost $complaintPost)
    {
        //
        $this->authorize('create', ComplaintPost::class);
        return view('dashboard.edit_status', compact('complaintPost'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplaintPost  $complaintPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplaintPost $complaintPost)
    {
        //
        $this->authorize('create', ComplaintPost::class);
        $complaintPost->update(request(['status']));

        return redirect('/complaints');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplaintPost  $complaintPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplaintPost $complaintPost)
    {
        //
    }
}
