<?php

namespace Modules\LandTracker\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LandTracker\Database\Factories\PaymentHistoryFactory;

class paymentHistory extends Model
{
    use HasFactory;


    protected $fillable = [
        'parcel_id',
        'payment_date',
        'amount',
        'payment_method',
        'transaction_id',
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }

    public function paymentAmount()
    {
        return $this->amount;
    }
    public function paymentDate()
    {
        return $this->payment_date;
    }
 }
