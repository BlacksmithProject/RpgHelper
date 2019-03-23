<?php
declare(strict_types=1);

namespace App\Infrastructure\CredentialsManagement\Doctrine\Exception;

use MyCLabs\Enum\Enum;

/**
 * @method static ErrorMessage CREDENTIALS_NOT_FOUND()
 * @method static ErrorMessage TOKEN_NOT_FOUND()
 */
final class ErrorMessage extends Enum
{
    private const CREDENTIALS_NOT_FOUND = 'credentials.not_found';
    private const TOKEN_NOT_FOUND = 'token.not_found';
}