<?php

namespace App\Http\Controllers\Admin\Moderation;

use App\Models\Bid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BidsController extends Controller
{
    public function index() {
        return view('admin/moderation/bids/index')
            ->with(
                'bids',
                Bid::RequiresModeration()
                    ->with('commodity')
                    ->with('shop')
                    ->with('reporter')
                    ->get()
            );
    }

    public function destroy(int $bidId) {
        Bid::RequiresModeration()->findOrFail($bidId)->delete();
        return response()->json(['success' => true]);
    }

    public function update(Request $request, int $bidId) {
        $this->validate($request, [
            'requires_moderation' => 'required|boolean'
        ]);

        $bid = Bid::RequiresModeration()->findOrFail($bidId);

        $bid->requires_moderation = $request->get('requires_moderation');
        $bid->save();

        return response()->json($bid);
    }
}
