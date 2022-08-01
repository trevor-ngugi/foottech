<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postimage;

class ImageUploadController extends Controller
{
     //Add image
    public function addImage(){
        return view('events/create');
    }
    //Store image
    public function storeImage(Request $request){
         $data= new Postimage();
         
         $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data->title = $request->title;
            $data->body = $request->body;
        }
        $data->save();
        return redirect()->route('images.view');
       /*Logic to store data*/
    }
        //View image
    public function viewImage()
    {
        $imageData= Postimage::all();
        return view('events/index', compact('imageData'));
    }
    public function show(Postimage $imageData)
    {
        return view('events/show', compact('imageData'));
    }
    public function edit(Postimage $imageData)
    {
        return view('events/edit', compact('imageData'));
    }
    public function update(Postimage $imageData, Request $request)
    {
        $data= new Postimage();
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data->title = $request->title;
            $data->body = $request->body;
        }
        $data->update();
        return redirect()->route('images.view');
    }
    public function destroy(Postimage $imageData)
    {
        $imageData->delete();
        return redirect()->route('images.view')->with('success','Post deleted successfully!');
    }


    public function allteam()
    {

        return view('team.showteam');

    }

    public function profileteam()
    {

        return view('team.teamprofile');

    }

    public function allscout()
    {

        return view('scout.showscout');

    }

    public function messagescout()
    {

        return view('message');

    }
    

    
}
