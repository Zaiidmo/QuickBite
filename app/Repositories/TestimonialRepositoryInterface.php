<?php 

namespace App\Repositories;

interface TestimonialRepositoryInterface
{
    public static function all();
    public function create($data);

    public static function approvedTestimonials();

    public function approveTestimonial($id);

    public function rejectTestimonial($id);

}