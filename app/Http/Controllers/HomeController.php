<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function contact_mail_send(Request $request)
    {
        $data= $request->validate([
            'full_name'=>'required|string|max:50',
            'email'=>'required|string',
            'user_name'=>'required|string',
            'message'=>'required|string',
        ]);
        Contact:: create($data);
        
        Mail:: to('clara@example.com')->send(
            new EmailsNotification($data)
        );
        return "mail sent!";
    }
}
