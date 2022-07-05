<?php

namespace App\Repositories;

use App\Models\Support;
use App\Models\User;

class SupportRepository
{
    protected $entity;

    public function __construct(Support $entity)
    {
        $this->entity = $entity;
    }

    public function getSupports(array $filters = [])
    {
        return $this->getAuthUser()
            ->supports()
            ->where(function ($query) use ($filters) {
                if (isset($filters['lesson'])) {
                    $query->where('lesson_id', $filters['lesson']);
                }

                if (isset($filters['status'])) {
                    $query->where('status', $filters['status']);
                }

                if (isset($filters['filter'])) {
                    $query->where('description', 'LIKE', "%{$filters['filter']}%");
                }
            })->get();
    }

    private function getAuthUser(): User
    {
        // return auth()->user();
        return User::first();
    }
}
