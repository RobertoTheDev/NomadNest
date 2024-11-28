<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via atribuição em massa
    protected $fillable = [
        'user_id', 
        'title', 
        'description', 
        'price', 
        'location', 
        'available_from', 
        'available_until', 
        'amenities', 
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = number_format($value, 2, '.', '');
    }

    
    public function getAmenitiesAttribute($value)
    {
        return json_decode($value, true);  
    }

    
    public function isAvailable($start_date, $end_date)
    {
        return $this->available_from <= $start_date && $this->available_until >= $end_date;
    }
}
