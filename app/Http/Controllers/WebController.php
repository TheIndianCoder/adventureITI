<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Notice;

class WebController extends Controller
{
    public function index(){
        $gallery = Gallery::where('status',1)->get();
        return view('web.index',compact('gallery'));
    }
    // about
    public function about(){
        return view('web.about');
    }
    // vission
    public function vision(){
        return view('web.vision');
    }
    // chairmanMessage
    public function chairmanMessage(){
        return view('web.chairmanmessage');
    }
    // voiceChairmanMessage
    public function voiceChairmanMessage(){
        return view('web.vicechairmanmessage');
    }
    // principleMessage
    public function principleMessage(){
        return view('web.principlemessage');
    }
    // admissionProsidor
    public function admissionProsidor(){
        return view('web.admissionprosidor');
    }
    // infrastructure
    public function infrastructure(){
        return view('web.infrastructure');
    }
    // classroom
    public function classroom(){
        return view('web.classroom');
    }
    // lab
    public function lab(){
        return view('web.lab');
    }
    // playground 
    public function playground(){
        return view('web.playground');
    }
    // workshop
    public function workshop(){
        return view('web.workshop');
    }
    // electrician
    public function electrician(){
        return view('web.electrician');
    }
    // fitter 

    public function fitter(){
        return view('web.fitter');
    }

    // notice 
    public function notice(){
        $notice = Notice::where('status',1)->get();
        return view('web.noticeboard',compact('notice'));
    }
    // gallery 
    public function gallery(){
        $gallery = Gallery::where('status',1)->get();
        return view('web.gallery', compact('gallery'));
    }
    // contactus
    public function contactus(){
        return view('web.contactus');
    }
}