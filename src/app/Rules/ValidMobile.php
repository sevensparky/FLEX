<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidMobile implements Rule
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
        return preg_match('/^9[0-9]{9}/', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'فرمت موبایل نامعتبر می باشد. موبایل باید با ۹ شروع شود و ۹ کاراکتری باشد.';
    }
}
