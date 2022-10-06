<?php

require_once './class/turma.php';
require_once './class/aluno.php';


$turma = new Turma('Turma 1', 'Professor 1');
$aluno = new Aluno('Aluno 1', '123', $turma);

$turma->addAluno($aluno);

print '<pre>';

print($turma->getNome() . ' - ' . $turma->getProfessor() . '    ' . $turma->getAlunos()[0]->getNome() . ' - ' . $turma->getAlunos()[0]->getMatricula());

print '</pre>';