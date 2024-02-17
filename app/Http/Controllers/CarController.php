<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate(5);
        return view('admin/cars', compact('cars'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::get();
        return view('admin/addCar',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'title'=>'required|string|max:50',
            'price'=>'required|string|max:50',
            'description'=> 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id'=>'required|string|max:50',
           ], $messages);
           $fileName = $this->uploadFile($request->image, 'assets/images');  
           $data['image'] = $fileName;
           
       $data['active'] = isset($request->active);
       Car::create($data);
       return redirect('cars');
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
        $car = Car::findOrFail($id);
        $categories = Category::get();
        return view('editcar',compact('car','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
            'title.required'=>'the title field is required',
            'title.string'=>'Should be string',
            'description.required'=> 'the description field is required, should be text',
            'image.required'=> 'please select the picture',
            'image.mimes'=> 'incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'cat_name.required'=>'the title field is required',


        ];
    }

    public function uploadFile(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }
}
