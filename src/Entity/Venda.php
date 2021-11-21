<?php

namespace App\Entity;

use App\Repository\VendaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VendaRepository::class)
 */
class Venda
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $codigo;

    /**
     * @ORM\Column(type="float")
     */
    private $valor_total;

    /**
     * @ORM\Column(type="integer")
     */
    private $qtd_produto;

    /**
     * @ORM\ManyToOne(targetEntity=Produto::class, inversedBy="getProdutos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Produto_id;

    /**
     * @ORM\ManyToOne(targetEntity=Vendedor::class, inversedBy="getVendas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Vendedor_id;

    /**
     * @ORM\ManyToOne(targetEntity=Cliente::class, inversedBy="getCompras")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Cliente_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodigo(): ?string
    {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): self
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getValorTotal(): ?float
    {
        return $this->valor_total;
    }

    public function setValorTotal(float $valor_total): self
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    public function getQtdProduto(): ?int
    {
        return $this->qtd_produto;
    }

    public function setQtdProduto(int $qtd_produto): self
    {
        $this->qtd_produto = $qtd_produto;

        return $this;
    }

    public function getProdutoId(): ?int
    {
        return $this->Produto_id;
    }

    public function setProdutoId(int $Produto_id): self
    {
        $this->Produto_id = $Produto_id;

        return $this;
    }

    public function getVendedorId(): ?Vendedor
    {
        return $this->Vendedor_id;
    }

    public function setVendedorId(?Vendedor $Vendedor_id): self
    {
        $this->Vendedor_id = $Vendedor_id;

        return $this;
    }

    public function getClienteId(): ?Cliente
    {
        return $this->Cliente_id;
    }

    public function setClienteId(?Cliente $Cliente_id): self
    {
        $this->Cliente_id = $Cliente_id;

        return $this;
    }
}
