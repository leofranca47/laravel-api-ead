<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupportResource;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }


    public function index(Request $request)
    {
        return SupportResource::collection($this->repository->getSupport());
    }
}
