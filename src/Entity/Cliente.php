<?php

namespace App\Entity;

use App\Repository\ClienteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClienteRepository::class)
 */
class Cliente
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
     * @ORM\Column(type="string", length=30)
     */
    private $cpf_cnpj;

    /**
     * @ORM\Column(type="string", length=14, nullable=true)
     */
    private $telefone;

    /**
     * @ORM\OneToMany(targetEntity=Venda::class, mappedBy="Cliente_id")
     */
    private $getCompras;

    public function __construct()
    {
        $this->getCompras = new ArrayCollection();
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

    public function getCpfCnpj(): ?string
    {
        return $this->cpf_cnpj;
    }

    public function setCpfCnpj(string $cpf_cnpj): self
    {
        $this->cpf_cnpj = $cpf_cnpj;

        return $this;
    }

    public function getTelefone(): ?string
    {
        return $this->telefone;
    }

    public function setTelefone(?string $telefone): self
    {
        $this->telefone = $telefone;

        return $this;
    }

    /**
     * @return Collection|Venda[]
     */
    public function getGetCompras(): Collection
    {
        return $this->getCompras;
    }

    public function addGetCompra(Venda $getCompra): self
    {
        if (!$this->getCompras->contains($getCompra)) {
            $this->getCompras[] = $getCompra;
            $getCompra->setClienteId($this);
        }

        return $this;
    }

    public function removeGetCompra(Venda $getCompra): self
    {
        if ($this->getCompras->removeElement($getCompra)) {
            // set the owning side to null (unless already changed)
            if ($getCompra->getClienteId() === $this) {
                $getCompra->setClienteId(null);
            }
        }

        return $this;
    }
}
