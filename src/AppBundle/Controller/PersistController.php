<?php

/**
 * Created by PhpStorm.
 * User: Przemo
 * Date: 2017-03-07
 * Time: 23:14
 */
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Article;
use Symfony\Component\HttpFoundation\JsonResponse;
use Faker;
use AppBundle\Entity\MyArticle;
use Symfony\Component\HttpFoundation\Response;

class PersistController extends Controller
{
    /**
     * @Route("/persist/db")
     */

    public function indexAction()
    {
        $faker= Faker\Factory::create();

        $idFaker = $faker->numerify;
        $titleFaker = $faker->sentence(1);
        $contentFaker = $faker->realText($maxNbChars = 300);

        $article1 = new \AppBundle\Entity\MyArticle();

        $article1->setId($idFaker);
        $article1->setTitle($titleFaker);
        $article1->setContent($contentFaker);

        $articleArray = array (
            'id'=>$article1->getId(),
            'title'=>$article1->getTitle(),
            'content'=>$article1->getContent(),
            );

        $em = $this->getDoctrine()->getManager();
        $em->persist($article1);
        $em->flush();

        return  new Response();

    }
}
