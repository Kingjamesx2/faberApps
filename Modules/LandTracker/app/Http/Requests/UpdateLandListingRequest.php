<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLandListingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method == "PUT") {
            return [
                "name" => ["required", "string", "max:255"],
                "location" => ["required", "string", "max:255"],
                "parcelId" => ["required", "integer"],
            ];
        } else {
            return [
                "name" => ["sometimes", "required", "string", "max:255"],
                "location" => ["sometimes", "required", "string", "max:255"],
                "parcelId" => ["sometimes", "required", "integer"],
            ];
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "parcel_id" => $this->parcelId,
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
