<?php
// src/Controller/BlogController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{    /**
     * Matches /blog exactly
    * @Route("/blog", name="blog_list")
    */
   public function list()

   {
       return $this->render('index.html.twig');

   }
    /**
    *
    * @Route("/blog/{slug}", requirements={"slug"="[a-z0-9\-]*"}, name="blog_show")
    */

   public function show($slug)
   {
       $upper = ucwords(str_replace('-', ' ', $slug));
       return $this->render('slug.html.twig', ['slug' => $upper]);
   }

}





























///*
//
//// src/Controller/BlogController.php
//namespace App\Controller;
//
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\Routing\Annotation\Route;
//
//
///**
// * @Route("/author", name="author_")
// */
//
//class BlogController extends AbstractController
//{
//    /**
//     * Matches /blog exactly
//     *
//     * @Route("/blog", name="blog_list")
//     */
//    public function list($slug)
//    {
//        return $this->render('/template/index.html.twig', ['slug' => $slug]);
//    }
//    /**
//     * Matches /blog/*
//     *
//     * @Route("/blog/{slug}", requirements={"page"="[a-z]+-\d+"}, name="blog_show")
//     */
//    public function show($slug)
//    {
//        echo "hello";
//    }
//}*//*    /**
//     * Matches /blog exactly
//     * @Route("/blog", name="blog_list")
//     */
//    public function list()
//    {
//        return $this->render('index.html.twig');
//
//    }*/