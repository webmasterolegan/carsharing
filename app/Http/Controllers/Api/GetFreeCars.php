<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\CarResource;
use App\Models\Car;

class GetFreeCars
{
    public function __invoke()
    {
        return CarResource::collection(Car::doesntHave('driver')->get());
    }
}
