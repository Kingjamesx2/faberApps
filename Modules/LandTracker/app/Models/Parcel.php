<?php

namespace Modules\LandTracker\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\LandTracker\Models\RealEstateAgent;
use App\Models\User;
// use Modules\LandTracker\Database\Factories\ParcelFactory;

class parcel extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_no',
        'real_estate_agent_id',
        'user_id ',
        'total_price',
        'paid_amount',
        'size',
        'purchase_date',
        'status',
    ];

    /**
     * Get the real estate agent associated with the parcel.
     */
    public function realEstateAgent()
    {
        return $this->belongsTo(RealEstateAgent::class, 'real_estate_agent_id');
    }

    /**
     * Get the user associated with the parcel.
     */
    public function parcels()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the land listings associated with the parcel.
     */
    public function landListings()
    {
        return $this->belongsTo(LandListings::class);
    }

    /**
     * Get the payment history associated with the parcel.
     */
    public function paymentHistory()
    {
        return $this->hasMany(PaymentHistory::class, 'parcel_id');
    }

    /**
     * Get the documents associated with the parcel.
     */
    public function documents()
    {
        return $this->belongsTo(Documents::class, 'parcel_id');
    }
}
