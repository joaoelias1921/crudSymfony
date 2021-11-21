<?php

namespace App\Entity;

use App\Repository\VendedorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VendedorRepository::class)
 */
class Vendedor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $cpf;

    /**
     * @ORM\Column(type="float")
     */
    private $salario;

    /**
     * @ORM\OneToMany(targetEntity=Venda::class, mappedBy="Vendedor_id")
     */
    private $getVendas;

    public function __construct()
    {
        $this->getVendas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getSalario(): ?float
    {
        return $this->salario;
    }

    public function setSalario(float $salario): self
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * @return Collection|Venda[]
     */
    public function getGetVendas(): Collection
    {
        return $this->getVendas;
    }

    public function addGetVenda(Venda $getVenda): self
    {
        if (!$this->getVendas->contains($getVenda)) {
            $this->getVendas[] = $getVenda;
            $getVenda->setVendedorId($this);
        }

        return $this;
    }

    public function removeGetVenda(Venda $getVenda): self
    {
        if ($this->getVendas->removeElement($getVenda)) {
            // set the owning side to null (unless already changed)
            if ($getVenda->getVendedorId() === $this) {
                $getVenda->setVendedorId(null);
            }
        }

        return $this;
    }
}
