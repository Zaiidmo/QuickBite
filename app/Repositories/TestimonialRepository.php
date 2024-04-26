<?php 

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository
{
    public function all()
    {
        return Testimonial::all();
    }

    public function create($data)
    {
        return Testimonial::create($data);
    }

}