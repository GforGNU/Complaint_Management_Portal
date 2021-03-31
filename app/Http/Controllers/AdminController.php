<?php

namespace App\Http\Controllers;
use App\User;
use App\ComplaintPost;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index()
    {
        //
        $this->authorize('create', ComplaintPost::class);
        $admins = User::where('is_admin',"=",1)->get();
        return view('dashboard.admins', compact('admins'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create', ComplaintPost::class);
        return view('dashboard.create_admin');
        }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        //
        $this->create($request);
 

        User::create([
            'name' => $request->input('name'),
            'email'    => $request->input('email'),
            'password'   => bcrypt($request->input('password')),
            'is_admin'   => 1,
            ]);

        return redirect('/admins');
    }
    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('create', ComplaintPost::class);
        User::destroy($id);
        return redirect('/admins'); 
    }



}
