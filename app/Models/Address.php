<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $table = 'addresses';
    protected $fillable = [
        'person_id',
        'state',
        'city',
        'zip_code',
        'road_type',
        'road_name',
        'internal_number',
        'external_number',
        'suburb',
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
