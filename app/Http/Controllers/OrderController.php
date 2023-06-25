<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $orders = $this->user->orders;
        $items = $this->user->items;
        $orders = OrderResource::collection($orders);
        $finalPrice = collect($items)->sum('price');
        $finalCount = collect($orders)->sum('count');
        return view('pages.orders', compact('orders','items','finalCount','finalPrice','user'));
    }

    public function payments()
    {
        $payments = Payment::all();
        return $this->get('payments.status')->name;
    }

    public function store(Request $request)
    {
        $items = $this->user->carts->toArray();
        $finalPrice = collect($items)->sum('price');


        if ($finalPrice < 1) return ['error' => 'Добавьте товары в корзину'];

        $order = $this->user->orders()->create([
            'items' => $items,
            'finalPrice' => $finalPrice,
        ]);


        foreach ($this->user->carts as $orderItem) {
            $orderItem->item->available -= $orderItem->count;
            $orderItem->item->save();
        }

        $paymentController = new PaymentController();
        $pay = $paymentController->store([
            "url" => (config('app.url')),
            "price" => $finalPrice,
            "order_id" => $order->id,
            "user" => $this->user,
        ]);
        if (!empty($pay["errors"])) {
            return response()->json($pay, 422);
        }
        $this->user->carts()->delete();

        return $order;
    }

    public function delete(Order $order)
    {
        if ($order->status !== 'Новый') {
            return redirect()->back();
        }

        $order->delete();

        return redirect()->route('orders');
    }

    public function cancelOrder(Request $request, Order $order)
    {
        $description = $request->get('description');
        $order->status = 'Отменён';
        $order->description = $description;
        $order->save();

        return redirect()->back();
    }

    public function confirmOrder(Order $order)
    {
        $order->status = 'Подтверждён';
        $order->save();

        return redirect()->back();
    }
}
