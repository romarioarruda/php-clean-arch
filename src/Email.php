<?php
namespace Alura\Arch;

use InvalidArgumentException;

class Email
{
    private string $email;

    public function __construct(string $email)
    {
        $this->email = $this->validaEmail($email);
    }

    private function validaEmail(string $email): string
    {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('E-mail inválido', 400);
        }

        return $email;
    }

    public function __toString(): string
    {
        return $this->email;
    }
}
