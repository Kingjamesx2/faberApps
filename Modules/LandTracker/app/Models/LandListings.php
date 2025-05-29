<?php

namespace Modules\LandTracker\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LandTracker\Database\Factories\LandListingsFactory;

class LandListings extends Model
{
    use HasFactory;


    protected $fillable = [
        "name",
        "location",
        "parcel_id",
    ];

    public function parcel()
    {
        return $this->hasMany(Parcel::class, 'parcel_id');
    }

}
