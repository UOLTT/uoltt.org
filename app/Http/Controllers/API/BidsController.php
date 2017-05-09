<?php

namespace App\Http\Controllers\API;


use App\Models\Bid;
use Illuminate\Http\Request;

class BidsController extends ApiController
{

    public function index(Request $request) {

        $this->validate($request,[
            'limit' => 'integer',
            'before' => 'integer',
            'after' => 'integer'
        ]);

        $Bids = Bid::with('commodity','shop');

        if ($request->has('before'))
            $Bids = $Bids->where('id','<',$request->get('before'));

        if ($request->has('after'))
            $Bids = $Bids->where('id','>',$request->get('after'));

        if ($request->has('limit'))
            $Bids = $Bids->limit($request->get('limit'))->orderBy('id','asc');

        $Bids = $Bids->get();

        $Bids->makeHidden([
            'commodity_id',
            'reported_by',
            'shop_id',
            'updated_at',
        ]);

        return response()->json($Bids);

    }

}