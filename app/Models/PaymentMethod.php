<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaymentMethod extends Model
{
    use HasFactory;
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
