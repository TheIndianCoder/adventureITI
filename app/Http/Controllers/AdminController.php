<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Notice;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function addGallery(){
        return view('admin.gallery.add');
    }
    // store gallery

    public function storeGallery(Request $request){
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try{
            
            $gallery = new Gallery();

            $gallery->title = $request->title;
            $gallery->description = $request->description;
            if($request->hasFile('image')){

                $image = $request->file('image');
                $image_name = time().'_'.$image->getClientOriginalName();
                $image->move(public_path('uploads/gallery'), $image_name);
                $gallery->image = $image_name;
                
            }            
            
            $gallery->save();

            return redirect()->back()->with('success', 'Gallery added successfully');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    // gallery list

    public function galleryList(){
        $gallery = Gallery::all();

        return view('admin.gallery.list',compact('gallery'));
    }
    // delete gallery

    public function deleteGallery($id){
        $id = base64_decode($id);

        try{
            if(Gallery::find($id)->exists()){
                $gallery = Gallery::find($id);
                $gallery->delete();

                return redirect()->back()->with('success','Image deleted Successfully');
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error','somthing went wrong');
        }
    }
    // change Status

    public function changeStatus($id){
        $id = base64_decode($id);
        try{
            if(Gallery::find($id)->exists()){
                $gallery = Gallery::find($id);
                $gallery->status = $gallery->status == 1 ? 0 : 1;
                $gallery->save();

                return redirect()->back()->with('success','Status change Successfully');
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error','somthing went wrong');
        }
    }

    // =================== Notice Function ===============================

    // add notice

    public function addNotice(){
        return view('admin.notice.add');
    }

    // store notice
    public function storeNotice(Request $request){
        // dd($request->all());

        $request->validate([
            "title" => "required",
            "notice" => "required",
        ]);

        try{
            $notice = new Notice;

            $notice->title = $request->title;
            $notice->description = $request->details;

            if($request->hasFile('notice')){

                $file = $request->file('notice');
                $file_name = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('uploads/notice'), $file_name);
                $notice->file = $file_name;
                
            }
            $notice->save();

            return redirect()->back()->with('success', 'Notice added successfully');

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
        
    }

    // list notice 
    public function noticeList(){
        $notice = Notice::all();
        return view('admin.notice.list',compact('notice'));
    }

    // change statue

    public function changeStatusNotice($id){
        $id = base64_decode($id);
        try{
            if(Notice::find($id)->exists()){
                $notice = Notice::find($id);
                $notice->status = $notice->status == 1 ? 0 : 1;

                $notice->save();

                return redirect()->back()->with('success','Status change Successfully');
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error','somthing went wrong');
        }
    }

    // delete notice

    public function deleteNotice($id){
        $id = base64_decode($id);
        try{
            if(Notice::find($id)->exists()){
                $notice = Notice::find($id);
                $notice->delete();

                return redirect()->back()->with('success','Notice Deleted Successfully');
            }
        }catch(\Exception $e){
            return redirect()->back()->with('error','somthing went wrong');
        }
    }
}