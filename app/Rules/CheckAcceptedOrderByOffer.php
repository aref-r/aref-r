<?php

namespace App\Rules;

use App\Models\Offer;
use Illuminate\Contracts\Validation\Rule;

class CheckAcceptedOrderByOffer implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $order = Offer::findOrfail($value)->order;
        if ($order->is_accept == 0)
            return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "این سفارش یک پیشنهاد فعال دارد.";
    }
}
