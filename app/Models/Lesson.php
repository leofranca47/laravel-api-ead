<?php

namespace App\Models;


class Lesson extends BaseModel
{
    protected $fillable = [
        "name",
        "module_id",
        "url",
        "video",
        "decription"
    ];

    public function supports()
    {
        return $this->hasMany(Support::class);
    }
}
