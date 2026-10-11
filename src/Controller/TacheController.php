<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Tache;
use Doctrine\ORM\EntityManagerInterface;

final class TacheController extends AbstractController
{
    #[Route('/taches', name: 'app_tache')]
    public function index(EntityManagerInterface $em): Response
    {
        $taches = $em->getRepository(Tache::class)->findAll();

        return $this->render('tache/index.html.twig', [
            'taches' => $taches,
        ]);
    }

    #[Route('/taches/ajouter', name: 'app_tache_ajouter')]
    public function ajouter(EntityManagerInterface $em): Response
    {
        $tache = new Tache();

        $tache->setTitre('Apprendre Symfony');
        $tache->setDescription('Apprendre à créer un projet Symfony');
        $tache->setTerminee(false);
        $tache->setDateCreation(new \DateTime());

        $em->persist($tache);
        $em->flush();

        return new Response('Tâche ajoutée avec succès !');
    }

    #[Route(
        '/taches/{id}',
        name: 'app_tache_detail',
        requirements: ['id' => '\d+']
    )]
    public function detail(Tache $tache): Response
    {
        return $this->render('tache/detail.html.twig', [
            'tache' => $tache,
        ]);
    }
}