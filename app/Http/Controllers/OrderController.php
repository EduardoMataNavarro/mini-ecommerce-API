<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderController extends Controller
{
    //
    function Index() {
        return response()->json(Order::with('OrderDetails')->get());
    }

    function GetById($id) {
        return response()->json(Order::find($id));
    }

    function Create(Request $request) {
        
        $new_order = Order::create([
            'number' => now()->timestamp,
            'user_id' => 1,
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'state' => $request->input('state'),
            'country' => $request->input('country'),
            'subtotal' => 0.0,
            'total' => 0.0,
            'observations' => '',
            'payment_method_id' => $request->input('payment_method_id'),
            'shipment_method_id' => $request->input('shipment_method_id'),
        ]);
        $new_order->save();

        $subtotal = 0.0;
        $total = 0.0;

        $order_details = $request->input('details');
        foreach ($order_details as $order_detail) {

            $product_id = $order_detail['product_id'];
            $product = Product::find($product_id)->first();
            $quantity = $order_detail['quantity'];
            $amount = $quantity * $product->price;
            
            $order_detail = OrderDetail::create([
                'product_id' => $order_detail['product_id'],
                'quantity' => $quantity,
                'order_id' => $new_order->id,
                'price' => $product->price,
                'amount' => $amount, 
            ]);
            $order_detail->save();
            $subtotal += $amount;
        }
        $new_order->total = $subtotal;
        $new_order->subtotal = $subtotal;
        $new_order->save();

        return response()->json($new_order);
    }
}
