<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\CarResource;
use Illuminate\Support\Facades\Gate;
use App\Models\Car;

class DriveCar
{
    public function __invoke(Request $request, Car $car)
    {
        if (! Gate::allows('drive-car')) {
            abort(403);
        }

        $car->driver()->associate($request->user());
        $car->save();

        return new CarResource($car);
    }
}
