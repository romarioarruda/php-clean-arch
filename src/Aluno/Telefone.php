<?php
namespace Alura\Arch\Aluno;

use InvalidArgumentException;

class Telefone
{
    private string $ddd;
    private string $numero;

    public function __construct(string $ddd, string $numero)
    {
        $this->ddd = $this->validaDDD($ddd);
        $this->numero = $this->validaNumero($numero);
    }

    private function validaDDD(string $ddd): string
    {
        preg_match("#\d{2}#is", $ddd, $dddResult);

        if(count($dddResult) <= 0) {
            throw new InvalidArgumentException('DDD inválido', 400);
        }

        return $dddResult[0];
    }

    private function validaNumero(string $numero): string
    {
        preg_match("#\d{9}#is", $numero, $numeroResult);

        if(count($numeroResult) <= 0) {
            throw new InvalidArgumentException('Número de telefone inválido', 400);
        }

        return $numeroResult[0];
    }

    public function __toString(): string
    {
        return "({$this->ddd}) {$this->numero}";
    }
}
