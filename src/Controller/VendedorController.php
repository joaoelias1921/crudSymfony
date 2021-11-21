<?php

namespace App\Controller;

use App\Entity\Vendedor;
use App\Form\VendedorType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VendedorController extends AbstractController
{
/**
     * @Route("/vendedor", name="vendedor")
     */
    public function index(): Response
    {
        $vendedores = $this->getDoctrine()->getRepository(Vendedor::class)->findAll();

        return $this->render('vendedor/index.html.twig', [
            'lista' => $vendedores
        ]);
    }

    /**
     * @Route("/vendedor/create", name="vendedor")
     */
    public function create(Request $request): Response
    {
        $vendedor = new Vendedor();

        $form = $this->createForm(VendedorType::class, $vendedor);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$vendedor' original já foi atualizada
            $vendedor = $form->getData();

            // ... executa uma ação, como salvar o vendedor no BD
            // por exemplo, se Vendedor é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vendedor);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados salvos com sucesso!');

            return $this->redirectToRoute('vendedor_index');
        }

        return $this->renderForm('vendedor/create.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/vendedor/edit/{id}", name="edit")
     */
    public function edit(Request $request, $id){
        $vendedor = $this->getDoctrine()->getRepository(Vendedor::class)->find($id);

        $form = $this->createForm(VendedorType::class, $vendedor);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$vendedor' original já foi atualizada
            $vendedor = $form->getData();

            // ... executa uma ação, como salvar o vendedor no BD
            // por exemplo, se Vendedor é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($vendedor);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados atualizados com sucesso!');

            return $this->redirectToRoute('vendedor_index');
        }

        return $this->renderForm('vendedor/edit.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/vendedor/delete{id}", name="delete")
     */
    public function delete($id){
        $vendedor = $this->getDoctrine()->getRepository(Vendedor::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($vendedor);
        $entityManager->flush();

        $this->addFlash('notice', 'Dados removidos com sucesso!');

        return $this->redirectToRoute('vendedor_index');
    }
}
