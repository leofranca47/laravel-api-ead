<?php

namespace App\Models;

class Course extends BaseModel
{
    protected $fillable = [
        "name",
        "description",
        "image"
    ];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}
