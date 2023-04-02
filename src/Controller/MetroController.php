<?php

namespace App\Controller;

use App\Entity\Metro;
use App\Form\MetroType;
use App\Repository\MetroRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/metro')]
class MetroController extends AbstractController
{
    #[Route('/', name: 'app_metro_index', methods: ['GET'])]
    public function index(MetroRepository $metroRepository): Response
    {
        return $this->render('metro/index.html.twig', [
            'metros' => $metroRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_metro_new', methods: ['GET', 'POST'])]
    public function new(Request $request, MetroRepository $metroRepository): Response
    {
        $metro = new Metro();
        $form = $this->createForm(MetroType::class, $metro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metroRepository->save($metro, true);

            return $this->redirectToRoute('app_metro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('metro/new.html.twig', [
            'metro' => $metro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_metro_show', methods: ['GET'])]
    public function show(Metro $metro): Response
    {
        return $this->render('metro/show.html.twig', [
            'metro' => $metro,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_metro_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Metro $metro, MetroRepository $metroRepository): Response
    {
        $form = $this->createForm(MetroType::class, $metro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $metroRepository->save($metro, true);

            return $this->redirectToRoute('app_metro_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('metro/edit.html.twig', [
            'metro' => $metro,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_metro_delete', methods: ['POST'])]
    public function delete(Request $request, Metro $metro, MetroRepository $metroRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$metro->getId(), $request->request->get('_token'))) {
            $metroRepository->remove($metro, true);
        }

        return $this->redirectToRoute('app_metro_index', [], Response::HTTP_SEE_OTHER);
    }
}
