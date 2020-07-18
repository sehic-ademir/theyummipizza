<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Orders;
use App\OrderProducts;
use App\User;
class OrdersController extends Controller
{
        public function getOrders($id){
        $orders = \DB::table('orders')->where('user_id', $id)->get();
        return response()->json($orders);
    }
        public function getOrderProducts($id){
        $ordersProducts = \DB::table('order_products')->where('order_id', $id)->get();
        return response()->json($ordersProducts);
    }
    //   public function index($id){
    //     $pizza = \DB::table('pizzas')->find($id);
    //     return response()->json($pizza);
    // }

    	public function createOrder(Request $request) {
    		$order = new Orders([
    			'user_id' => $request->user_id,
    			'address' => $request->address,
    			'phone' => $request->phone,
    			'note' => $request->note
    		]);
    		$order->save();
    		foreach ($request['pizza_id'] as $value) {
    			$OrderProducts = new OrderProducts([
    				'user_id' => $request->user_id,
    				'pizza_id' => $value,
    				'order_id' => $order['id']
    			]);
    			$OrderProducts->save();
    		}
    		        return response()->json([
            'message' => 'Order saved successfully!'
        ], 201);

    	}
}
