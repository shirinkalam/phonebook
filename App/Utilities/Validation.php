<?php

namespace App\Utilities;

class Validation
{
    public static function is_valid_email(string $email)
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
            return true;

        return false;
    }

    public static function is_strong_password(string $password)
    {
        $lengthCheck =(strlen($password) >= 8) ? 1 : 0 ;
        $lettersCheck= preg_match('/[a-zA-Z]/',$password);
        $digitsCheck=preg_match('/\d/',$password);
        return ($lengthCheck && $lettersCheck && $digitsCheck);
    }
}