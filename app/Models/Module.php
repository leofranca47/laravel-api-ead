<?php

namespace App\Models;

class Module extends BaseModel
{
    protected $fillable = [
        "course_id",
        "name"
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
