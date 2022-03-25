<?php

namespace Alura\Arquitetura\Aplicacao\Aluno\Matricula;


class MatricularAlunoDTO
{
    public string $cpf;
    public string $nome;
    public string $email;


    public function __construct(string $cpf, string $nome, string $email)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->email = $email;
    }
}
