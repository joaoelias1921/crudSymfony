<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produto;

class ProdutoController extends AbstractController
{
    /**
     * @Route("/produto", name="produto")
     */
    public function index(): Response
    {
        return $this->render('produto/index.html.twig', [
            'controller_name' => 'ProdutoController',
        ]);
    }

    /**
     * @Route("/produto", name="create_produto")
     */
    public function createProduto(): Response
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduto(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $produto = new Produto();
        $produto->setNome('Teclado');
        $produto->setDescricao('Ergonômico e estiloso!');
        $produto->setPrecoUnitario(1999);

        // tell Doctrine you want to (eventually) save the produto (no queries yet)
        $entityManager->persist($produto);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Novo produto salvo com id '.$produto->getId());
    }
}
