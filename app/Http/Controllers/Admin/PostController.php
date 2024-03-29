<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;



class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $objService = new Services();
        $services = $objService->join('categories','categories.id', '=', 'Services.category_id')->select('services.*', 'categories.name as category_name')->get();
        
        return view('admin.post', compact('categories', 'services'));
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
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title'=>'required',
    //         'category_id' => 'required',
    //         'description' => 'required',
    
    //        ]);
    //        $data = [
    //         'title' => $request->title,
    //         'category_id' => $request->category_id,
    //         'description' => $request->description,
    //         'status' => $request->status,
    //        ];
    //        if($request->hasfile('thumbnail')){
    //         $file = $request->file('thumbnail');
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = time() . '.' . $extension;
    //         // $file ->move(public_path('post_thumbnails'),$filename);
    //         // Resize image
    //         $thumbnail = Image::make($file);
    //         $thumbnail->resize(600,360)->save(public_path('post_thumbnails/'.$filename));
            
    //         $data['thumbnail'] = $filename;
    //        }

    //        Services::create($data);
    //        return redirect()->back()->with('success','Post create successfully!');
    // }


    
    public function service_create(Request $request){


        $request->validate([
            'title'=>'required',
            'category_id' => 'required',
            'description' => 'required',
            'Location'    => 'required',
            'payment'     => 'required',
    
           ]);
           $data = [
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
            'Location'    => $request->Location,
            'payment'    => $request->payment,
            'status' => $request->status,
           ];
           if($request->hasfile('thumbnail')){
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file ->move(public_path('post_thumbnails'),$filename);
            // Resize image
            $thumbnail = Image::make($file);
            $thumbnail->resize(600,360)->save(public_path('post_thumbnails/'.$filename));
            
            $data['thumbnail'] = $filename;
           }

           Services::create($data);
           return redirect()->back()->with('success','Post create successfully!');
        
        
        return view('service_create.create_service');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            // 'title'=>'required',
            'category_id' => 'required',
            // 'description' => 'required',
    
           ]);
           $data = [
            // 'title' => $request->title,
            'category_id' => $request->category_id,
            // 'description' => $request->description,
            'status' => $request->status,
           ];

        //    if($request->hasfile('thumbnail')){
        //     if($request->old_thumb){
        //         File::delete(public_path('post_thumbnails/' .$request->old_thumb));
        //     }
        //     $file = $request->file('thumbnail');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     // $file ->move(public_path('post_thumbnails'),$filename);

        //     // Resize image
        //     $thumbnail = Image::make($file);
        //     $thumbnail->resize(600,360)->save(public_path('post_thumbnails/'.$filename));
            
        //     $data['thumbnail'] = $filename;
        //    }

           Services::where('id',$id)->update($data);
           return redirect()->back()->with('success','Post create successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Services::find($id);
        if($post->thumbnail){
            File::delete(public_path('post_thumbnails/' . $post->thumbnail));
        }
        $post->delete();
        return redirect()->back()->with('success','Post create successfully!');
    }






    




}
