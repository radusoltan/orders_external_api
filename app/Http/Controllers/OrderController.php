<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatus;
use App\Http\Resources\OrderResource;
use App\Models\Order;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OrderController extends Controller
{
    public function index() {
        return OrderResource::collection(Order::with('orderItems')->get());
    }

    public function show($orderNumber){
        $order = Order::where('order_number', $orderNumber)->with('orderItems')->first();
        return new OrderResource($order);
    }


    public function updateStatus(Request $request, $orderNumber)
    {

        $validated = $request->validate([
            'status' => ['required', 'string', 'in:' . implode(',', array_column(OrderStatus::cases(), 'value'))],
        ]);

        try {
            $order = Order::where('order_number', $orderNumber)->first();


            $order->update(['status' => $validated['status']]);

            return response()->json([
                'message' => 'Order status updated successfully.',
                'order' => $order,
            ]);
        } catch (NotFoundHttpException $exception){
            throw new NotFoundHttpException($exception->getMessage());
        }
    }
}
