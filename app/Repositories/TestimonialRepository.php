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
}
