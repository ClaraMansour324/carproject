<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Common;

class UserController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=User::paginate(1);
        return view('admin/users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::get();
        return view('admin/addUser',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
         'full_name'=>'required|string|max:50',
         'user_name'=>'required|string|max:100',
         'email'=>'required|string|max:200',
         'password'=>'required|string|max:150',
        ], $messages);
        
        $data['active'] = isset($request->active);
        User::create($data);
        return redirect('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users=User::findOrFail($id);
        return view('admin/editUser',compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
         'full_name'=>'required|string|max:50',
         'user_name'=>'required|string|max:100',
         'email'=>'required|string|max:200',
         'password'=>'required|string|max:150',
        ], $messages);
        
        $data['active'] = isset($request->active);
        User::where('id', $id)->update($data);
        return redirect('users');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function messages()
    {
        return[
            'user_name.required'=>'the title field is required',
            'full_name.string'=>'Should be string',
            'email.required'=> 'the email field is required, should be text',
            'password.required'=>'the title field is required',


        ];
    }
}
