<?php

namespace App\enum;

enum UserRole: int
{
    case ADMIN = 1;
    case USER = 2;


    public static function toArray(): array
    {
        $array = [];
        foreach (self::cases() as $case) {
            $array[$case->value] = $case->value;
        }

        return $array;
    }
}
