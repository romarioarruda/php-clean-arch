<?php
namespace Alura\Arch\Aluno;

use Alura\Arch\Email;
use Alura\Arch\CPF;
use Alura\Arch\Aluno\Telefone;

class Aluno
{
    private Email $email;
    private CPF $cpf;
    private string $nome;
    private array $telefones;

    public function __construct(string $nome, Email $email, CPF $cpf)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
    }

    public static function comNomeEmailECPF(string $nome, string $email, string $cpf): self
    {
        return new Aluno($nome, new Email($email), new CPF($cpf));
    }

    public function adicionaTelefone(string $ddd, string $numero): self
    {
        $this->telefones[] = new Telefone($ddd, $numero);

        return $this;
    }
}
