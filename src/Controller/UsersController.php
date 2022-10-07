<?php

namespace App\Controller;

use App\Entity\Users;
use App\Form\UsersFormType;
use App\Repository\UsersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UsersController extends AbstractController
{

    private $apiURL = 'https://jsonplaceholder.typicode.com/users';

    /**
     * @Route("/", name="app_users")
     */
    public function UsersList(UsersRepository $users): Response
    {
        return $this->render('users/list.html.twig', [
            'users' => $users->findAll()
        ]);
    }
    
    /**
     * @Route("/add", name="app_users_add")
     */
    public function addUser(Request $request, UsersRepository $usersRepository): Response
    {
        $user = new Users();

        $form=$this->createForm(UsersFormType::class, $user);

        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $usersRepository->add($user, true);
            return $this->redirectToRoute('app_users');
        }

        return $this->render('users/add.html.twig', [
            "user_form" => $form->createView()
        ]);
    }


    /**
     * @Route("/import", name="app_users_import")
     */
    public function UsersImport(HttpClientInterface $client, EntityManagerInterface $entityManager): Response
    {
        $response = $client->request(
            'GET',
            $this->apiURL
        );
        $statusCode = $response->getStatusCode();
        $content = $response->toArray();

        foreach ($content as $element)
        {
            $user = new Users;
            $user->setName($element['name']);
            $user->setUsername($element['username']);
            $user->setEmail($element['email']);
            $user->setAdressStreet($element['address']['street']);
            $user->setAdressSuite($element['address']['suite']);
            $user->setAdressCity($element['address']['city']);
            $user->setAdressZipcode($element['address']['zipcode']);
            $user->setAdressGeoLat($element['address']['geo']['lat']);
            $user->setAdressGeoLng($element['address']['geo']['lng']);
            $user->setPhone($element['phone']);
            $user->setWebsite($element['website']);
            $user->setCompanyName($element['company']['name']);
            $user->setCompanyCatchPhrase($element['company']['catchPhrase']);
            $user->setCompanyBs($element['company']['bs']);
            $entityManager->persist($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute("app_users");
    }
}
