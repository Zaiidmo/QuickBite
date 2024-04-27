<?php 

namespace App\Repositories;

use App\Models\Testimonial;

class TestimonialRepository implements TestimonialRepositoryInterface
{
    public static function all()
    {
        return Testimonial::all();
    }

    public function create($data)
    {
        $userId = auth()->id();
        $data['user_id'] = $userId;
        return Testimonial::create($data);
    }

    public static function approvedTestimonials()
    {
        return Testimonial::where('status', 'approved')->get();
    }

    public function approveTestimonial($id){
        return Testimonial::where('id', $id)->update(['status' => 'approved']);
    }
    public function rejectTestimonial($id){
        return Testimonial::where('id', $id)->update(['status' => 'rejected']);
    }
}
