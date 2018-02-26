<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function index(){
        return view('pages.index');
    }
    function about(){
        return view('pages.about');
    }
    function contact(){
        return view('pages.contact');
    }
    function signup(){
        return view('pages.signup');
    }
    function signin(){
        return view('pages.signin');
    }
    function viewmessages()
    {
        return view('pages.viewmessages');
    }
    function store(Request $request){
        $name = $request->name;
        //echo "Thank you for submitting your information using the contact form, ".$name;
        return redirect()->route('thanks',['name' => $name ]);
    }
    function thanks($name, Request $request){
        return view('pages.thankyou')->with(compact('name'));
    }
    function card()
    {
        return view('pages.card');
    }
    function logout()
    {
        return view('pages.logout');
    }
}
