<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRealEstateAgentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "name" => ["required", "string", "max:255"],
            "phoneNo" => ["nullable", "string", "max:255"],
            "licenseNumber" => ["nullable", "string", "max:50"],
            "agencyName" => ["nullable", "string", "max:255"],
            "agencyAddress" => ["nullable", "string", "max:255"],
            "agencyPhone" => ["nullable", "string", "max:255"],
            "agencyEmail" => ["nullable", "email", "max:255"],
            "email" => ["required", "email", "max:255"],
            "created_at" => ["required", "date"],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "phone_no" => $this->phoneNo,
            "license_number" => $this->licenseNumber,
            "agency_name" => $this->agencyName,
            "agency_address" => $this->agencyAddress,
            "agency_phone" => $this->agencyPhone,
            "agency_email" => $this->agencyEmail,
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
