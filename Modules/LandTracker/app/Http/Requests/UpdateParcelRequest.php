<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateParcelRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method == "PUT") {
            return [
                "parcelNo" => ["required", "string", "max:255"],
                "realEstateAgentId" => ["required", "integer"],
                "userId" => ["required", "integer"],
                "totalPrice" => ["required", "numeric", "max:15", "min:0"],
                "paidAmount" => ["required", "numeric", "max:15", "min:0"],
                "size" => ["required", "numeric", "max:10", "min:0"],
                "purchaseDate" => ["required", "date"],
                "status" => ["required", "string", "max:255"],
            ];
        } else {
            return [
                "parcelNo" => ["sometimes", "required", "string", "max:255"],
                "realEstateAgentId" => ["sometimes", "required", "integer"],
                "userId" => ["sometimes", "required", "integer"],
                "totalPrice" => ["sometimes", "required", "numeric", "max:15", "min:0"],
                "paidAmount" => ["sometimes", "required", "numeric", "max:15", "min:0"],
                "size" => ["sometimes", "required", "numeric", "max:10", "min:0"],
                "purchaseDate" => ["sometimes", "required", "date"],
                "status" => ["sometimes", "required", "string", "max:255"],
            ];
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "parcel_no" => $this->parcelNo,
            "real_estate_agent_id" => $this->realEstateAgentId,
            "user_id" => $this->userId,
            "purchase_date" => $this->purchaseDate,
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
