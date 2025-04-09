<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Resources\BrandResource;
use App\Services\BrandServices;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function __construct(protected BrandServices $brandServices)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = $this->brandServices->getAll();

        return BrandResource::collection($brands->load('cars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = $this->brandServices->store($request);

        return BrandResource::make($brand);
    }
}
