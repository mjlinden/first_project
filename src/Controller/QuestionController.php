<?php
/**
 * Created by PhpStorm.
 * User: LINM04
 * Date: 8-3-2022
 * Time: 13:57
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('What a bewitching controller we have conjured!');
    }
    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show the question "%s"!',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
    /**
     * @Route ("/pizza")
     */
    public function pizza()
    {
        $categories=['classics','vegan','premium','meat lovers'];
        return $this->render('question/pizza.html.twig', ['categories'=>$categories]);
    }

}