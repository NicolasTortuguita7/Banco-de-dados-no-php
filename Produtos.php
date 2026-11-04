<?php

class Produto {
    private $nome;
    private $preco;
    private $quantidade;

    public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function ValorTotal() {
        return $this->quantidade * $this->preco;
    }
}

?>