<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace IbnKhaldoun\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        // Si le visiteur est d�j� identifi�, on le redirige vers l'accueil


        // Le service authentication_utils permet de r�cup�rer le nom d'utilisateur
        // et l'erreur dans le cas o� le formulaire a d�j� �t� soumis mais �tait invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('IbnKhaldounUserBundle:Security:login.html.twig');
    }
}