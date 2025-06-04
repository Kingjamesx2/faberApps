<?php

namespace Modules\LandTracker\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentHistoryRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            "parcelId" => ["required", "integer"],
            "amount" => ["required", "numeric", "max:15", "min:0"],
            "paymentDate" => ["required", "date"],
            "paymentMethod" => ["required", "string", "max:255"],
            "createdAt" => ["required", "date"],
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            "parcel_id" => $this->parcelId,
            "payment_date" => $this->paymentDate,
            "payment_method" => $this->paymentMethod,
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
