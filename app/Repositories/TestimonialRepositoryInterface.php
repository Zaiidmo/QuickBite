<?php 

namespace App\Repositories;

interface TestimonialRepositoryInterface
{
    public static function all();
    public function create($data);

}