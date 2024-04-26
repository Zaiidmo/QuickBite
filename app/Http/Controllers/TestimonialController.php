<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use App\Models\Testimonial;
use App\Repositories\TestimonialRepositoryInterface;

class TestimonialController extends Controller
{

    protected $testimonialRepository;

    public function __construct(TestimonialRepositoryInterface $testimonialRepository) 
    {
        $this->testimonialRepository = $testimonialRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = $this->testimonialRepository->all();
        return view('Admin.Testimonials');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        // dd($request->validated());
        if(auth()->check()){
        $data = $request->validated();
        // dd($data);
        $this->testimonialRepository->create($data);
        return redirect()->route('home')->with('success', 'Testimonial created successfully');
        } else {
            return redirect()->route('home')->with('error', 'You need to login to create a testimonial');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
