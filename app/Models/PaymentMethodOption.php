<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethodOption extends Model
{
    protected $table = 'payment_method_options';
    
    protected $fillable = [
        'payment_method_id',
        'key',
        'value'
    ];

    public function PaymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, "id");
    }
}
