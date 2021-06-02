<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
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

        Artisan::call("php-runner:execute", ['code' => $json['code']]);

        $result = [
            'result' => Artisan::output()
        ];

        return response()->json($result);
    }
}
