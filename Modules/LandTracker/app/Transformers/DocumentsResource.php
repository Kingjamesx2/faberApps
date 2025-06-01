<?php

namespace Modules\LandTracker\Transformers;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "parcelId" => $this->parcel_id,
            "userId" => $this->user_id,
            "agentId" => $this->agent_id,
            "type" => $this->type,
            "title" => $this->title,
            "fileURL" => $this->file_url,
            "signedAt" => $this->signed_at,
            "createdAt" => $this->created_at,
        ];
    }
}
