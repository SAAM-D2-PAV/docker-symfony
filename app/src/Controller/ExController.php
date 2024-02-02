<?php

namespace App\Controller;

use App\Service\MyLog;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExController extends AbstractController
{

    #[Route('/ex', name: 'app_ex')]
    public function index(MyLog $myLog): Response
    {

        $myLog->writeLog('premier log');
        return $this->render('samples/index.html.twig');
    }

    #[Route(path: '/form', name: 'app_form')]
    function form()
    {
        $from = $this->createFormBuilder()
            // ::class permet de résoudre le nom d'une classe.
            // NomDeClasse::class nous récupérons le nom complet de la classe avec le namespace utilisé
            ->add('content', TextType::class, [
                'attr' => ['class' => 'maClasse']
            ])
            ->add('submit', SubmitType::class, [])
            ->getForm();

        return $this->render('samples/form.html.twig', [
            'myForm' => $from->createView()
        ]);
    }


    #[Route(path: '/ex/{name}', name: 'app_test_arg')]
    function arg($name)
    {
        dd($name);
    }

    #[Route('/api', name: 'api')]
    public function api(): Response
    {
        return $this->json([]);
    }

    #[Route('/redirect')]
    public function toto()
    {
        //$url = $this->generateUrl('app_ex', ['title' => 'bar'], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->redirectToRoute('app_blog');
    }
}
