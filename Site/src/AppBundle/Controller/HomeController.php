<?php

namespace AppBundle\Controller;

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\Job;
use AppBundle\Repository\JobRepository;
//use Doctrine\DBAL\Types\TextType;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Reponse;
use AppBundle\Services\Concatenate;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class HomeController extends Controller
{
    /**
     * @Route("/", name="home", methods={"GET"})
     */
    public function index(JobRepository $jobRepository,ArticleRepository $articleRepository, Concatenate $concatenate, Request $request, $allResults = null)
    {

        return $this->render('home/index.html.twig', [
            "allResults" => $allResults,
            "articles"=> $articleRepository->articlehome(),
            "jobs"=>$jobRepository->Jobhome(),
        ]);
    }


    public function searchBarAction(JobRepository $jobRepository,ArticleRepository $articleRepository, Concatenate $concatenate, Request $request)
    {
        $form=$this->createFormBuilder()
            ->add('search',TextType::class, array('attr' => array('class'=> 'form-control mr-sm-2')))->getForm();

        return $this->render('home/searchBar.html.twig',[
            'form'=>$form->createView()
        ]);
    }


    /**
     * @Route("/search", name="handleSearch")
     */
    public function handleSearch(JobRepository $jobRepository,ArticleRepository $articleRepository, Concatenate $concatenate, Request $request)
    {


        $req = $request->query->get('form');
        $value = $req['search'];

        $articles = $articleRepository->searchArticles($value);
        $jobs = $jobRepository->searchJobs($value);

        $allResults = $concatenate->doConcatenate(
            $articles,
            $jobs
        );

        $response = $this->forward('AppBundle\Controller\HomeController::index', array(
            'allResults'  => $allResults,
        ));
        return $response;

    }

    /**
     * @Route("/articles", name="article")
     */
    public function article (ArticleRepository $articleRepository)
    {
        return $this->render('home/article.html.twig', [
            "articles"=> $articleRepository->articlehome(),
        ]);
    }

    /**
     * @Route("/jobs", name="jobs")
     */
    public function job (JobRepository $jobRepository)
    {
        return $this->render('home/job.html.twig', [
            "jobs"=>$jobRepository->Jobhome(),
        ]);
    }

    /**
     * @Route("/articles/{id}", name="articlesid")
     */

    public function showArticle($id)
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Article')
            ->find($id);
        $users = $article->getUsers();

        if (!$article) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('home/showArticle.html.twig', array(
            'article'      => $article,
            'user'=>$users
        ));
    }

    /**
     * @Route("/jobs/{id}", name="jobsid")
     */

    public function showJob($id)
    {
        $job = $this->getDoctrine()
            ->getRepository('AppBundle:Job')
            ->find($id);
        $user = $job->getUsers();

        if (!$job) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $this->render('home/showJob.html.twig', array(
            'job'      => $job,
            'user'=>$user
        ));
    }
    /**
     * @Route("/cgu", name="CGU")
     */
    public function CGU()
    {
        return $this->render('home/CGU.html.twig', [
        ]);
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions()
    {
        return $this->render('home/mentions.html.twig', [
        ]);
    }

    /**
     * @Route("/cookies", name="cookies")
     */
    public function cookies()
    {
        return $this->render('home/cookies.html.twig', [
        ]);
    }






}
