<?php

namespace App\Enums;

enum UserRolesEnum: string
{
    case Admin = 'admin';
    case User = 'user';
    case Moderator = 'moderator';

    public static function options(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
