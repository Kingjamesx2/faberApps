<?php

namespace Modules\LandTracker\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "paymentId" => $this->payment_id,
            "amount" => $this->amount,
            "paymentDate" => $this->payment_date,
            "paymentMethod" => $this->payment_method,
        ];
    }
}
