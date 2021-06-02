<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PHPController extends BaseController
{
    /**
     * Create a new controller instance.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function run(Request $request)
    {
        $json = $request->json()->all();

        dump($json);

        return response()->json([]);
    }
}
