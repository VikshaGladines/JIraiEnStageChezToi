<?php

namespace App\Rules;

use App\Models\Email;
use Illuminate\Contracts\Validation\Rule;
use Symfony\Component\Console\Input\Input;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class EmailRule implements Rule
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
        $values = explode("@",$value);
        $value = $values[1];
        $value0 = $values[0];
        $mail = Email::where('email', '=', $value)->first();
        if ($mail === null) {
            return false;
        }
        else {
            return true;
        }
        // user doesn't exist
    }
      
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'L\'adresse mail doit être valide';
    }
}
