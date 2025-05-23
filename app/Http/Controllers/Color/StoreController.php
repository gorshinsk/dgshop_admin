<?php

namespace App\Http\Controllers\Color;

use App\Http\Controllers\Controller;
use App\Http\Requests\Color\StoreRequest;
use App\Models\Color;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Color::firstOrCreate($data);

        return redirect()->route('color.index');
    }
}
