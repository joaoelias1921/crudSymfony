<?php

namespace App\Controller;

use App\Entity\Produto;
use App\Form\ProdutoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ProdutoController extends AbstractController
{
    /**
     * @Route("/produto", name="produto_index")
     */
    public function index(): Response
    {
        $produtos = $this->getDoctrine()->getRepository(Produto::class)->findAll();

        return $this->render('produto/index.html.twig', [
            'lista' => $produtos
        ]);
    }

    /**
     * @Route("/produto/create", name="produto_create")
     */
    public function create(Request $request): Response
    {
        $produto = new Produto();

        $form = $this->createForm(ProdutoType::class, $produto);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$produto' original já foi atualizada
            $produto = $form->getData();

            // ... executa uma ação, como salvar o produto no BD
            // por exemplo, se Produto é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produto);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados salvos com sucesso!');

            return $this->redirectToRoute('produto_index');
        }

        return $this->renderForm('produto/create.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/produto/edit/{id}", name="produto_edit")
     */
    public function edit(Request $request, $id){
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);

        $form = $this->createForm(ProdutoType::class, $produto);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$produto' original já foi atualizada
            $produto = $form->getData();

            // ... executa uma ação, como salvar o produto no BD
            // por exemplo, se Produto é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($produto);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados atualizados com sucesso!');

            return $this->redirectToRoute('produto_index');
        }

        return $this->renderForm('produto/edit.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/produto/delete{id}", name="produto_delete")
     */
    public function delete($id){
        $produto = $this->getDoctrine()->getRepository(Produto::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($produto);
        $entityManager->flush();

        $this->addFlash('notice', 'Dados removidos com sucesso!');

        return $this->redirectToRoute('produto_index');
    }
}
