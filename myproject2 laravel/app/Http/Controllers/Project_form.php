<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\PostRequestValidation;  // validation request 

use App\Models\User;
use App\Models\Address;
use App\Models\role;
use App\Models\Staff;
use App\Models\product;
use App\Models\photo;
use App\Models\video;
use App\Models\tag;
use App\Models\taggable;
use App\Models\post;

class Project_form extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = post::all();
        // $post = post::latest()->get();
        $post = post::Thequery();

        return view('project_form.index' , compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequestValidation $request)
    {
        // return $request->all();  // get all input of form

        // $this->validate($request , [              // شروط قبول المدخلات
        //     'name' => 'required|max:8'
        // ]);

        $post = new post;
        $post -> name = $request->name;

        $file = $request->file('file');
        $file_name = $file->getClientOriginalName();

        if($file){
            $post-> path = $file_name;
            $post->save();
            $file->move('picture' , $file_name);
        }


        return redirect('/Post/create');  // إعادة توجيه
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('project_form.show' , compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::find($id);
        return view('project_form.edite' , compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = post::find($id);
        $post->name = $request->name;
        $post->save();
        return redirect('/Post/'.$id.'/edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect('/Post');
    }
}
