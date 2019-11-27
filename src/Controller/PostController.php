<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\PostType;
use App\Repository\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="post")
     */
    public function index(PostRepository $repo)
    {
        return $this->render('post/index.html.twig', [
            'posts' => $repo->findAll()
        ]);
    }

    /**
     * @Route("/view/{id}", name="view_post")
     */
    public function view(Post $post)
    {
        return $this->render('post/view.html.twig', [
            'post' => $post
        ]);
    }

    /**
     * @Route("/add", name="add_post")
     */
    public function add(Request $request, EntityManagerInterface $manager)
    {
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {

            $post->setCreatedAt(new \Datetime());

            $manager->persist($post);
            $manager->flush();

            $this->addFlash('success', 'Votre article a été enregistré !');
            return $this->redirectToRoute('post');
        }

        return $this->render('post/form.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
