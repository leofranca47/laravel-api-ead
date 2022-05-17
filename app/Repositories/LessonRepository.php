<?php

namespace App\Repositories;

use App\Models\Lesson;

class LessonRepository
{
    public function __construct(
        private Lesson $entity
    ) {}

    public function getAllLessonsByModuleId(string $moduleId)
    {
        return $this->entity
                ->where('module_id', $moduleId)
                ->get();
    }

    public function getLesson(string $id)
    {
        return $this->entity->findOrFail($id);
    }
}
