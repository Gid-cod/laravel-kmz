<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $item = [
            'id' => $this->id,
            'finalPrice' => $this->finalPrice,
            'status' => $this->status,
            'description' => $this->description,
            'items' => $this->items,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'count' => $this->count,
        ];

        $payment = $this->payment;
        $status = $payment["status"];
        if ($status === "Новый") {
            $url = "https://yoomoney.ru/checkout/payments/v2/contract?orderId=" . $payment["transaction_id"];
            $item["pay"] = $url;
        }

        return $item;
    }
}
