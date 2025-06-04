<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method == "PUT") {
            return [
                "parcelId" => ["required"],
                "userId" => ["required"],
                "agentId" => ["required"],
                "type" => ["required"],
                "title" => ["required"],
                "fileURL" => ["required"],
                "signedAt" => ["required"],
                "createdAt" => ["required"],
            ];
        } else {
            return ([
                "parcelId" => ["sometimes", "required"],
                "userId" => ["sometimes", "required"],
                "agentId" => ["sometimes", "required"],
                "type" => ["sometimes", "required"],
                "title" => ["sometimes", "required"],
                "fileURL" => ["sometimes", "required"],
                "signedAt" => ["sometimes", "required"],
                "createdAt" => ["sometimes", "required"],
            ]);
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "parcel_id" => $this->parcelId,
            "user_id" => $this->userId,
            "agent_id" => $this->agentId,
            "signed_at" => $this->signedAt,
            "created_at" => $this->createdAt,
        ]);
    }
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
