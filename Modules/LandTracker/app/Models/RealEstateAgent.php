<?php

namespace Modules\LandTracker\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LandTracker\Database\Factories\RealEstateAgentFactory;

class realEstateAgent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'license_number',
        'agency_name',
        'agency_address',
        'agency_phone',
        'agency_email',
        'created_at',
        'updated_at'
    ];

    Public function parcels()
    {
        return $this->hasMany(Parcel::class, 'real_estate_agent_id');
    }

    /**
     * Get the documents associated with the real estate agent.
     */
    public function documents() {
        return $this->hasMany(Documents::class, 'agent_id');
    }
    
}
