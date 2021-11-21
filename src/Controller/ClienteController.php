<?php

namespace App\Controller;

use App\Entity\Cliente;
use App\Form\ClienteType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ClienteController extends AbstractController
{
    /**
     * @Route("/cliente", name="cliente_index")
     */
    public function index(): Response
    {
        $clientes = $this->getDoctrine()->getRepository(Cliente::class)->findAll();

        return $this->render('cliente/index.html.twig', [
            'lista' => $clientes
        ]);
    }

    /**
     * @Route("/cliente/create", name="cliente_create")
     */
    public function create(Request $request): Response
    {
        $cliente = new Cliente();

        $form = $this->createForm(ClienteType::class, $cliente);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$cliente' original já foi atualizada
            $cliente = $form->getData();

            // ... executa uma ação, como salvar o cliente no BD
            // por exemplo, se Cliente é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cliente);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados salvos com sucesso!');

            return $this->redirectToRoute('cliente_index');
        }

        return $this->renderForm('cliente/create.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/cliente/edit/{id}", name="cliente_edit")
     */
    public function edit(Request $request, $id){
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);

        $form = $this->createForm(ClienteType::class, $cliente);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() armazena os valores inseridos, mas,
            // a variável '$cliente' original já foi atualizada
            $cliente = $form->getData();

            // ... executa uma ação, como salvar o cliente no BD
            // por exemplo, se Cliente é uma entity do Doctrine, então salve-a
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cliente);
            $entityManager->flush();

            $this->addFlash('notice', 'Dados atualizados com sucesso!');

            return $this->redirectToRoute('cliente_index');
        }

        return $this->renderForm('cliente/edit.html.twig', [
            'form' => $form,
        ]);
    }

    /**
     * @Route("/cliente/delete{id}", name="cliente_delete")
     */
    public function delete($id){
        $cliente = $this->getDoctrine()->getRepository(Cliente::class)->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($cliente);
        $entityManager->flush();

        $this->addFlash('notice', 'Dados removidos com sucesso!');

        return $this->redirectToRoute('cliente_index');
    }
}
