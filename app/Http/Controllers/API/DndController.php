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
        // Validate the query
        $this->validate($request, [
            'roll' => 'required|regex:/(\d+)d(\d+)([ \-\+]?)(\d*)/'
        ]);

        // Match for 4d20+2, 2d6, 3d4-1, etc
        preg_match('/(\d+)d(\d+)([ \-\+]?)(\d*)/', $request->get('roll'), $diceData);

        // Break out the dice data into its root elements
        list($query, $rolls, $sides, $operator, $offset) = $diceData;

        // Setup empty dice array
        $dice = [];

        // For each of the rolls
        for ($roll = 0; $roll < $rolls; $roll++) {

            // Roll a die
            $die = random_int(1, $sides);

            // If we have no offset, add to the dice array and continue
            if (!$operator || !$offset) {
                $dice[] = $die;
                continue;
            }

            // Check if we are adding or subtracting from the dice and do that
            if ($operator === ' ' || $operator === '+') {
                $die += $offset;
            }else {
                $die = $offset >= $die ? 1 : $die - $offset;
            }

            $dice[] = $die;
        }

        return response(implode(', ', $dice));
    }
}
