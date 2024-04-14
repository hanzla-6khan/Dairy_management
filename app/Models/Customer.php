<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_en', 'name_ur', 'address', 'balance_limit', 'cnic', 'sms_name', 'mobile1', 'mobile2', 'category'
    ];



    public function assets()
    {
        return $this->hasMany(Asset::class);
    }
}
