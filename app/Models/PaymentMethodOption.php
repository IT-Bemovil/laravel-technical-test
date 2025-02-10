<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodOption extends Model
{
    use HasFactory;

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
