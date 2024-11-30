<?php

namespace App\Http\Resources;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentMethodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'payment_method',
            'attributes' => [
                'id' => $this->id,
                'name' => $this->name,
                'created_at' => $this->created_at,
                'options_count' => $this->options_count,
                'options' => PaymentMethodOptionResource::collection($this->options)
            ],
        ];
    }
}
