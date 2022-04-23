<?php

namespace App\Models\Properties;

use App\Models\State;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyDetail extends Model
{
    protected $fillable = [
        'user_id',
        'property_type_id',
        'country_id',
        'state_id',
        'title',
        'address',
        'description',
        'bedrooms',
        'bathrooms',
        'living_rooms',
        'cost',
        'image1',
        'image2',
        'image3',
        'image4',
        'image5',
        'features',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function state(){
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function country(){
        return $this->belongsTo(State::class, 'country_id', 'id');
    }

    public function property_type(){
        return $this->belongsTo(PropertyType::class, 'property_type_id', 'id');
    }

    public function property_reviews(){
        return $this->hasMany(PropertyReview::class, 'property_detail_id', 'id');
    }
}
