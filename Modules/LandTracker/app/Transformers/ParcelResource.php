<?php

namespace Modules\LandTracker\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ParcelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "parcelNo" => $this->parcel_no,
            "realEstateAgentId" => $this->real_estate_agent_id,
            "userId" => $this->user_id,
            "totalPrice" => $this->total_price,
            "paidAmount" => $this->paid_amount,
            "size" => $this->size,
            "purchaseDate" => $this->purchase_date,
            "status" => $this->status,
        ];
    }
}
