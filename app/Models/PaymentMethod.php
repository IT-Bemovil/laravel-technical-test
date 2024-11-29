<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'name',
        'description'
    ];
    protected $table = 'payment_methods';

    public function PaymentMethodOption()
    {
        return $this->hasMany(PaymentMethodOption::class);
    }
}
