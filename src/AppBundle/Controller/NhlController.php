<?php
/**
 * Created by PhpStorm.
 * User: Peter
 * Date: 07.04.2016
 * Time: 13:21
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Nhl;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class NhlController extends Controller
{
    /**
     * @Route("/", name="nhl_page")
     */
    public function listAction(Request $request)
    {
        return $this->render('nhl/index.html.twig');
    }

    /**
     * @Route("/nhl/articles", name="nhl_articles")
     */
    public function articlesAction(Request $request)
    {
        $nhl = $this->getDoctrine()
            ->getRepository('AppBundle:Nhl')
            ->findAll();
        return $this->render('nhl/articles.html.twig',array(
            'nhl'=>$nhl
        ));
    }



    /**
     * @Route("/nhl/create", name="nhl_create")
     */
    public function createAction(Request $request)
    {
        $article = new Nhl;
        $form = $this->createFormBuilder($article)
            ->add('article_name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', ChoiceType::class, array('choices' => array('NHL' => 'NHL','Players'=> 'Players','Slovaks Players' => 'Slovak Players'), 'attr'=>array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('author_email', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save',SubmitType::class, array('label'=> 'Create Article', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article_name = $form['article_name']->getData();
            $category = $form['category']->getData();
            $description = $form['description']->getData();
            $name = $form['name']->getData();
            $author_email = $form['author_email']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');

            $article->setArticleName($article_name);
            $article->setCategory($category);
            $article->setDescription($description);
            $article->setName($name);
            $article->setAuthorEmail($author_email);
            $article->setDueDate($due_date);
            $article->setCreateDate($now);

            $em = $this->getDoctrine()->getManager();

            $em->persist($article);
            $em->flush();

            $this->addFlash(

                'notice',
                'Article Added'
            );
            return $this->redirectToRoute('nhl_articles');


        }

        return $this->render('nhl/create.html.twig', array(
            'form'=>$form->createView()
        ));
    }


    /**
     * @Route("/nhl/edit/{id}", name="nhl_edit")
     */
    public function editAction($id,Request $request)
    {
        $article = $this->getDoctrine()
            ->getRepository('AppBundle:Nhl')
            ->find($id);
        $now = new\DateTime('now');

        $article->setArticleName($article->getArticleName());
        $article->setCategory($article->getCategory());
        $article->setDescription($article->getDescription());
        $article->setName($article->getName());
        $article->setAuthorEmail($article->getAuthorEmail());
        $article->setDueDate($article->getDueDate());
        $article->setCreateDate($now);


        $form = $this->createFormBuilder($article)
            ->add('article_name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('category', ChoiceType::class, array('choices' => array('NHL' => 'NHL','Players'=> 'Players','Slovaks Players' => 'Slovak Players'), 'attr'=>array('class' => 'form-control','style' => 'margin-bottom:15px')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('name', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('author_email', TextType::class, array('attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('due_date', DateTimeType::class, array('attr' => array('class' => 'formcontrol', 'style' => 'margin-bottom:15px')))
            ->add('save',SubmitType::class, array('label'=> 'Update Article', 'attr' => array('class' => 'btn btn-primary', 'style' => 'margin-bottom:15px')))
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article_name = $form['article_name']->getData();
            $category = $form['category']->getData();
            $description = $form['description']->getData();
            $name = $form['name']->getData();
            $author_email = $form['author_email']->getData();
            $due_date = $form['due_date']->getData();

            $now = new\DateTime('now');
            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('AppBundle:Nhl')->find($id);

            $article->setArticleName($article_name);
            $article->setCategory($category);
            $article->setDescription($description);
            $article->setName($name);
            $article->setAuthorEmail($author_email);
            $article->setDueDate($due_date);
            $article->setCreateDate($now);




            $em->flush();

            $this->addFlash(

                'notice',
                'Article Updated'
            );
            return $this->redirectToRoute('nhl_articles');


        }

        return $this->render('nhl/edit.html.twig',array(
            'nhl'=>$article,
            'form'=>$form->createView()
        ));

    }


    /**
     * @Route("/nhl/details/{id}", name="nhl_details")
     */
    public function detailsAction($id)
    {
        $nhl = $this->getDoctrine()
            ->getRepository('AppBundle:Nhl')
            ->find($id);
        return $this->render('nhl/details.html.twig',array(
            'nhl'=>$nhl
        ));
    }


    /**
     * @Route("/nhl/delete/{id}", name="nhl_delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository('AppBundle:Nhl')->find($id);

        $em->remove($article);
        $em->flush();
        $this->addFlash(

            'notice',
            'Article Deleted'
        );
        return $this->redirectToRoute('nhl_articles');
    }
}



