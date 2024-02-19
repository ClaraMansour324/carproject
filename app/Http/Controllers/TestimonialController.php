<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Traits\Common;

class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::paginate(3);
        return view('admin/testimonials',compact('testimonials'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonials=Testimonial::get();
        return view('admin/addTestimonials',compact('testimonials'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
         'name'=>'required|string|max:50',
         'position'=>'required|string|max:50',
         'content'=>'required|string',
         'image' => 'required|mimes:png,jpg,jpeg',
        ], $messages);
        $fileName = $this->uploadFile($request->image, 'assets/images');  
        $data['image'] = $fileName;
        
        $data['published'] = isset($request->published);
        Testimonial::create($data);
        return redirect('testimonials');
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
        $testimonials = Testimonial::findOrFail($id);
        return view('admin/editTestimonials',compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name'=>'required|string|max:50',
            'position'=>'required|string|max:50',
            'content'=>'required|string',
            'image' => 'required|mimes:png,jpg,jpeg',
            ], $messages);

         if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/images');  
            $data['image'] = $fileName;
            // unlink("assets/images/" . $request->oldImageName);
        }

        $data['published'] = isset($request->published);
        Testimonial::where('id', $id)->update($data);
        return redirect('testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Testimonial::where('id',$id)->delete();
        return redirect('testimonials');
    }

    public function messages()
    {
        return[
            'name.required'=>'the title field is required',
            'name.string'=>'Should be string',
            'position.required'=> 'the position field is required, should be text',
            'image.required'=> 'please select the picture',
            'image.mimes'=> 'incorrect image type',
            'image.max'=> 'Max file size exceeded',
            'content.required'=>'the title field is required',


        ];
    }

    public function sitetestimonial()
    {
        $testimonials = Testimonial::paginate(5);
        return view('testimonial', compact('testimonials'));

    }
}
