<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $id)
 * @method static get()
 * @method static paginate(int $int, string[] $array, string $string, mixed $page)
 */
class PaymentMethod extends Model
{
    public function paymentMethodOptions(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(PaymentMethodOption::class);
    }
}
