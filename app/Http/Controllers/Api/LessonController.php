<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LessonResource;
use App\Repositories\LessonRepository;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    protected $repository;

    public function __construct(LessonRepository $repository)
    {
        $this->repository = $repository;
    }


    public function index(string $id)
    {
        return LessonResource::collection($this->repository->getAllLessonsByModuleId($id));
    }

    public function show($id)
    {
        return new LessonResource($this->repository->getLesson($id));
    }
}
