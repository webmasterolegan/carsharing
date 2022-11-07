<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Car;

class ReturnCar
{
    public function __invoke(Request $request)
    {
        if (! Gate::allows('return-car')) {
            abort(403);
        }

        $car = $request->user()->car;

        $car->driver()->dissociate();
        $car->save();

        return response()->json([
            'success' => 'Car returned',
        ]);
    }
}
