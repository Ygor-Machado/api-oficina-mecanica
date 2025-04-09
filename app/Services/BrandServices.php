<?php

namespace App\Services;
use App\Http\Requests\StoreBrandRequest;
use App\Models\Brand;

class BrandServices
{
    public function getAll()
    {
        $brands = Brand::all();

        return $brands;
    }

    public function store(StoreBrandRequest $request): Brand
    {
        $brand = Brand::create($request->validated());

        return $brand;
    }
}
