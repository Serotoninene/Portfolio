<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Twig\Extension\HttpFoundationExtension;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PagesController extends AbstractController
{
    /**
     * @Route ("/", name= "homepage")
     */
    public function index (){
        return $this->render('/en/index.html.twig');
    }

    /**
     * @Route("/fr", name = "homepage_fr")
     */
    public function indexfr(){
        return $this->render('/fr/index_fr.html.twig');
    }

    /**
     * @Route ("/projects", name = "projects")
     */
    public function projects(){
        return $this->render('/en/projects.html.twig');
    }

    /**
     * @Route ("/projects_fr", name = "projects_fr")
     */
    public function projectsfr(){
        return $this->render('/fr/projects_fr.html.twig');
    }

    /**
     * @Route ("/resume", name = "resume")
     */
    public function resume(){
        return $this->render('/en/resume.html.twig');
    }

    /**
     * @Route ("/resume_fr", name = "resume_fr")
     */
    public function resumefr(){
        return $this->render('/fr/resume_fr.html.twig');
    }
}