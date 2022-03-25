<?php

namespace Alura\Arquitetura\Aplicacao\Aluno\Matricula;

use Alura\Arquitetura\Dominio\Aluno\RepositorioDeAluno;
use Alura\Arquitetura\Dominio\Aluno\Aluno;

class MatricularAluno
{
    private RepositorioDeAluno $repositorio;

    public function __construct(RepositorioDeAluno $repositorio)
    {
        $this->repositorio = $repositorio;
    }

    public function executa(MatricularAlunoDTO $aluno): void
    {
        $aluno = Aluno::comCpfNomeEEmail($aluno->cpf, $aluno->nome, $aluno->email);

        $this->repositorio->adicionar($aluno);
    }
}
