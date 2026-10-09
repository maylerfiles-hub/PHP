<?php
require_once 'Aluno.php';

$aluno1 = new Aluno("Marcos", "Técnico em Informática", [8.0, 7.5, 9.0]);
$aluno2 = new Aluno("Joana", "Técnico em Informática", [4.0, 2.5, 9.0]);
$aluno3 = new Aluno("Carla", "Técnico em Informática", [5.0, 7.5, 3.0]);
$aluno4 = new Aluno("Marcelo", "Técnico em Informática", [4.0, 2.5, 1.0]);
$aluno5 = new Aluno("Andre", "Técnico em Informática", [1.0, 2.5, 3.0]);
$aluno6 = new Aluno("Jose", "Técnico em Informática", [2.0, 3.5, 5.0]);
$aluno7 = new Aluno("Claudio", "Técnico em Informática", [2.0, 7.5, 9.0]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Média de Curso</title>
</head>
<body>
    <h2>Média de Curso - Status</h2>

    <div>
        <?php $aluno1->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno2->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno3->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno4->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno5->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno6->exibirStatusCard(); ?>
    </div>

    <div>
        <?php $aluno7->exibirStatusCard(); ?>
    </div>
</body>
</html>