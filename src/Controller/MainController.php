<?php

namespace App\Controller;

use App\Entity\Notes;
use App\Form\NotesType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request): Response
    {
        $notes = new Notes();

        $form = $this->createForm(NotesType::class, $notes);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $notes = $form->getData();
//            dump($request); die;
            return $this->redirectToRoute('index');
        }

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'form' => $form->createView(),
        ]);
    }
}
