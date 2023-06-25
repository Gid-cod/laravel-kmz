<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdminOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $user = $this->user;
        $surname = $user->surname;
        $name = $user->name;
        $patronymic = $user->patronymic;
        $userName = array_filter([$surname, $name, $patronymic]);
        $email = $user->email;
        $userEmail = array_filter([$email]);
        return [
            'id' => $this->id,
            'total' => number_format($this->finalPrice, 0, "", " "). ' ₽',
            'status' => $this->status,
            'description' => $this->description,
            'items' => $this->items,
//            'items' => ItemResource::collection($this->items),
            'username' => implode(' ', $userName),
            'userEmail' => implode(' ', $userEmail),
            'payment' => $this->payment,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

    }
}
