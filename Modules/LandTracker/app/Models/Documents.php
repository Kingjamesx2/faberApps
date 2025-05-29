<?php

namespace Modules\LandTracker\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\LandTracker\Database\Factories\DocumentsFactory;

class documents extends Model
{
    use HasFactory;

    protected $fillable = [
        'parcel_id',
        'user_id',
        'agent_id',
        'type',
        'title',
        'file_url',
        'signed_at',
        'created_at',
    ];

    public function parcel()
    {
        return $this->belongsTo(Parcel::class, 'parcel_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function agent() {
        return $this->belongsTo(RealEstateAgent::class, 'agent_id');
    }
}
