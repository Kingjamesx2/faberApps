<?php

namespace Modules\LandTracker\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RealEstateAgentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "phoneNumber" => $this->phone_number,
            "licenseNumber" => $this->license_number,
            "agencyName" => $this->agency_name,
            "agencyAddress" => $this->agency_address,
            "agencyEmail" => $this->agency_email,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at,
        ];
    }
}
