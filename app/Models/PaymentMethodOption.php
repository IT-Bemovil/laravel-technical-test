<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodOption extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentMethodOptionFactory> */
    use HasFactory;

    public function PaymentMethod(){
        return $this->hasMany(PaymentMethod::class);
    }
}
