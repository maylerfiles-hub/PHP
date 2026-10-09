<?php
class Produto {
    public $nome;
    public $preco;
    public $imagemUrl;

    // Construtor corrigido (dois underscores e chaves abrindo o bloco)
    public function __construct($nomeInicial, $precoInicial, $imagemInicial) {
        $this->nome = $nomeInicial;
        $this->preco = $precoInicial;
        $this->imagemUrl = $imagemInicial;
    }

    // Exibe o card com imagem, nome e preço formatado em R$
    public function exibirCardHtml() {
        echo "<div class='card'>";
        echo "  <img src='{$this->imagemUrl}' alt='{$this->nome}'>";
        echo "  <h3>{$this->nome}</h3>";
        echo "  <p>R$ " . number_format($this->preco, 2, ',', '.') . "</p>";
        echo "</div>";
    }

    // Aplica o desconto alterando o valor atual da propriedade
    public function aplicarDesconto($percentual) {
        $desconto = $this->preco * ($percentual / 100);
        $this->preco -= $desconto;
    }
}
?>