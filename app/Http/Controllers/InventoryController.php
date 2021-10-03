<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iventory;

class InventoryController extends Controller
{
    //
    function Index() {
        return response()->json(Inventory::All());
    }

    function GetByProduct($product_id) {
        return response()->json(Inventory::where('product_id', $product_id));
    }

    function Create(Request $request) {

        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $type = $request->input('type');

        $newIventoryDetail = InventoryDetail::create([
            'product_id' => $product_id,
            'quantity' => $quantity,
            'type' => $type,
        ]);

        return response()->json($newIventoryDetail);
    }
}
