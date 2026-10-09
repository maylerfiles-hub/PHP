<?php
class Aluno {
    public $nome;
    public $curso;
    public $notas; // Agora recebe um array com as notas [ex: 8.5, 7.0, 9.0]

    public function __construct($nomeAluno, $cursoAluno, array $notasAluno) {
        $this->nome = $nomeAluno;
        $this->curso = $cursoAluno;
        $this->notas = $notasAluno;
    }

    // Método auxiliar para calcular a média das notas
    public function calcularMedia() {
        if (empty($this->notas)) {
            return 0;
        }
        $soma = array_sum($this->notas);
        return $soma / count($this->notas);
    }

    // Método solicitado para exibir o card com nome, curso, média e status
    public function exibirStatusCard() {
        $media = $this->calcularMedia();
        
        // Define o status e a cor com base na média (Média mínima: 7.0)
        $aprovado = $media >= 7.0;
        $statusText = $aprovado ? "Aprovado" : "Reprovado";
        $corStatus  = $aprovado ? "#2e7d32" : "#c62828"; // Verde para aprovado, Vermelho para reprovado

        echo "<div style='border: 1px solid #ccc; padding: 15px; border-radius: 8px; font-family: sans-serif; max-width: 300px; margin-bottom: 10px;'>";
        echo "  <h3 style='margin-top: 0;'>{$this->nome}</h3>";
        echo "  <p><strong>Curso:</strong> {$this->curso}</p>";
        echo "  <p><strong>Média:</strong> " . number_format($media, 1, ',', '.') . "</p>";
        echo "  <p><strong>Status:</strong> <span style='color: {$corStatus}; font-weight: bold;'>{$statusText}</span></p>";
        echo "</div>";
    }
}

// ===============================================
// Exemplo de uso:
// ===============================================

// Aluno 1: Aprovado
$aluno1 = new Aluno("João Silva", "Técnico em Informática", [8.0, 7.5, 9.0]);
$aluno1->exibirStatusCard();

// Aluno 2: Reprovado
$aluno2 = new Aluno("Maria Oliveira", "Desenvolvimento de Sistemas", [5.0, 6.0, 4.5]);
$aluno2->exibirStatusCard();
?>