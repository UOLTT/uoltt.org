<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DndController extends Controller
{

    /**
     * Formats the validation response so debugging errors is easier.
     *
     * @param Request $request
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    protected function buildFailedValidationResponse(Request $request, array $errors)
    {
        return response()->json($errors);
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            'n' => 'required|int', // number of dice
            'd' => 'required|int', // dice sides
            'o' => 'int'           // offset
        ]);
        $dice = [];
        for ($n=0; $n < (int)$request->get('n'); $n++) {
            $roll = random_int(
                1,
                (int)$request->get('d')
            );
            $dice[] = $roll > 0 ? $roll : 1;
        }
        return response(implode(' ', $dice));
    }
}
