<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class UserInterfaceController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/userinterface', name: 'app_user_interface')]
    public function index(): Response
    {
        return $this->render('user_interface/index.html.twig', [
            'controller_name' => 'UserInterfaceController',
        ]);
    }
}
