<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
//        $item["price"] = number_format($item["price"], 2, ".", " "). ' ₽';
        return [
            "id" => $this->id ?? '',
            'item' => $this->item ?? [],
            "count" => $this->count ?? '',
            "price" => number_format($this->price ?? 0, 2, ".", " "). ' ₽'
        ];
    }
}
