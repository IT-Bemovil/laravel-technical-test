<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethodOption extends Model
{
    use HasFactory;
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
