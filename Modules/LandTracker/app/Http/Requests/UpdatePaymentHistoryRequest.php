<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePaymentHistoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $method = $this->method();
        if ($method == "PUT") {
            return [
                "parcelId" => ["required", "integer"],
                "amount" => ["required", "numeric", "max:15", "min:0"],
                "paymentDate" => ["required", "date"],
                "paymentMethod" => ["required", "string", "max:255"],
            ];
        } else {
            return ([
                "parcelId" => ["sometimes", "required", "integer"],
                "amount" => ["sometimes", "required", "numeric", "max:15", "min:0"],
                "paymentDate" => ["sometimes", "required", "date"],
                "paymentMethod" => ["sometimes", "required", "string", "max:255"],
            ]);
        }
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "parcel_id" => $this->parcelId,
            "payment_date" => $this->paymentDate,
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
