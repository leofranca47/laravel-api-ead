<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    public function __construct(
        private Course $entity
    ) {}

    public function getAllCourses()
    {
        return $this->entity->get();
    }

    public function getCourse($id)
    {
        return $this->entity->findOrFail($id);
    }
}
