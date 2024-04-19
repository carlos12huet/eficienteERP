<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function address(){
        return $this->hasMany(Address::class);
    }
    public function contacts(){
        return $this->hasMany(Contact::class);
    }
    public function tax_regimes(){
        return $this->belongsToMany(TaxRegime::class);
    }
}