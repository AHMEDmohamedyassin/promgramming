<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $post = Post::all();
        return view('home' , compact(['user' , 'post']));
    }

    public function post($id){
        $post = Post::find($id);
        return view('blog' , compact('post'));
    }

    public function CreatePost (){
        $this->authorize('create' , Post::class );
        return view('admin.post_create');
    }

    public function StorePost (){
        request()->validate([
            'title' => 'required | min:5',
            'content' => 'required',
            'image' => 'file'
        ]);
        $file=request()->images;

        $file_name = $file->getClientOriginalName();

        if($file) {
            request()->file('images')->storeAs('public/images' , $file_name);
        }

        $post = new Post;
        $post -> title = request()->title;
        $post -> content = request()->content;
        $post -> image = 'storage/images/'.$file_name;
        $post -> user_id = Auth::user()->id;
        $post->save();

        return redirect(route('post.create'));
    }

    public function ShowPost (){
        $post = auth()->user()->post;
        return view('admin.post_show' , compact(['post']));
    }

    public function UpdatePost ($id){
        $post = Post::find($id);
        $this->authorize('update' , $post);
         return view('admin.post_update' , compact(['post']));
    }

    public function EditPost (){
        $post = Post::find(request()->id);
        $post->title = request()->title;
        if(request()->content) {$post->content = request()->content;}
        $file = \request()->images;
        if($file) {
            request()->file('images')->storeAs('public/images/' , $file->getClientOriginalName());
            $post->image = 'storage/images/' . $file->getClientOriginalName();
            Storage::delete( asset(request()->oldImage) );
        }

        $post->save();
        return redirect(route('post.update' , request()->id ));
    }

    public function DeletePost(){
        $post = Post::find(request()->id)->delete();
        Storage::delete( \request('oldImage'));
        session(['message' => 'deleted']);
        $this->authorize('delete' , $post);
        return redirect(route('post.show' , request()->id )  );
    }

    public function UserProfile ($id){
        // $user = User::find($id);
        $role = Role::all();
        $user = auth()->user();
        return view('admin.user_profile' , compact(['user','role']));
    }

    public function UserUpdate(){
        request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);
        $user = User::find(request('id'));
        $user->name = request()->name;
        $user->email = request()->email;
        $user->password = request()->password;
        $user->save();

        return redirect(route('user.profile' , request('id') ) );
    }

    public function UserCreate(){
        return view('admin.user_create');
    }

    public function UserShow(){
        $user = user::all();

        return view('admin.user_show' , compact('user'));
    }

    public function UserDelete($id){
        $user = User::find($id);
        $user->delete();
        session(['message' => 'deleted']);
        return redirect(route('user.show'));
    }

    public function RoleDelete (){
        $user= User::find(request('user_id'))->role()->find(request('role_id'))->delete();
        return redirect(route('user.show'));
    }

    public function attach($id){

        return redirect(route('admin'));
    }

    public function deattach($id){

        return redirect(route('admin'));
    }
}
