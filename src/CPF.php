<?php
namespace Alura\Arch;

use InvalidArgumentException;

class CPF
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $this->validaCPF($cpf);
    }

    private function validaCPF(string $cpf): string
    {
        preg_match("#\d{3}.\d{3}.\d{3}-\d{2}#is", $cpf, $cpfResult);

        if(count($cpfResult) <= 0) {
            throw new InvalidArgumentException('CPF inválido', 400);
        }

        return $cpfResult[0];
    }

    public function __toString(): string
    {
        return $this->cpf;
    }
}
