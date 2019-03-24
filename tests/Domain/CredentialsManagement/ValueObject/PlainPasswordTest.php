<?php
declare(strict_types=1);

namespace App\Tests\Domain\CredentialsManagement\ValueObject;

use App\Domain\CredentialsManagement\ValueObject\PlainPassword;
use App\Tests\Domain\CredentialsManagement\BaseTestCase;
use Assert\InvalidArgumentException;

final class PlainPasswordTest extends BaseTestCase
{
    public function testItCanBeInitialized(): void
    {
        $plainPassword = new PlainPassword('winterIsComing');

        $this->assertSame('winterIsComing', (string) $plainPassword);
    }

    public function testItCannotHaveANullParameter(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('credentials.password.cannot_be_null');

        new PlainPassword(null);
    }

    public function testItCannotHaveABlankParameter(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('credentials.password.cannot_be_blank');

        new PlainPassword('');
    }
}
