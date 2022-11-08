<?php

namespace App\Rules;

use App\JadwalKuliah;
use Illuminate\Contracts\Validation\Rule;

class JadwalKuliahTimeAvailabilityRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($jadwalKuliah = null)
    {
        $this->jadwalKuliah = $jadwalKuliah;
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
       return JadwalKuliah::isTimeAvailable(request()->input('hari'), $value, request()->input('end_time'),$this->jadwalKuliah);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This time is not available';
    }
}
