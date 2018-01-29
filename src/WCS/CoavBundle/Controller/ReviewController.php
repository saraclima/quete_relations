<?php

namespace WCS\CoavBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use WCS\CoavBundle\Entity\Review;
use WCS\CoavBundle\Form\ReviewType;

/**
 * Class ReviewController
 * @package WCS\CoavBundle\Controller
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/",    name="review_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        //to display all the reviews by users
        //we retrieve the Doctrine service and its entity mgr
        $em = $this->getDoctrine()->getManager();
        //Once its done, we charge entity review and
        $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();
        //we return to our views an object which is called 'reviews'. morelike select * from review
        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews,
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/new",  name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
        // return $this->render('review/new.html.twig');
        // build the form ...

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();

            // You can use too :
            // return $this->redirect($this->generateUrl('review_show', array('id' => $review->getId())))

            return $this->redirectToRoute('review_show', array('id' => $review->getId()));
        }

        return $this->render('review/new.html.twig', array(
            'review' => $review,
            'form' => $form->createView(),
        ));
    }

    /*La première est simple, on instancie juste un objet $review de type Review.
- La deuxième quant à elle,
    nécessite plus d'attention.
    En effet, on décide de créer un objet $form qui va récuperer le retour de la méthode `createForm()`.
    Celle-ci prend deux paramètres obligatoires, ta classe formulaire (donc ReviewType) et un objet $review
    qui recevera toutes les informations que tu auras envoyé lors de la soumission du formulaire.
*/

    /**
     * Finds and displays a review entity.
     *
     * @Route("/{id}", name="review_show")
     * @Method("GET")
     */
    public function showAction(Review $review)
    {
        //$deleteForm = $this->createDeleteForm($review);

        return $this->render(
            'review/show.html.twig', array(
                'review' => $review,
                //'delete_form' => $deleteForm->createView(),
            )
        );
    }

    /**
     * @Route("/{id}/edit", name="review_edit")
     *
     * @Method({"GET",      "POST"})
     */
    public function editAction(Request $request, Review $review)
    {
        $deleteForm = $this->createDeleteForm($review);
        $editForm = $this->createForm('WCS\CoavBundle\Form\ReviewType', $review);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('review_edit', array('id' => $review->getId()));
        }

        return $this->render(
            'review/edit.html.twig', array(
                'review' => $review,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            )
        );
    }


    /**
     * Deletes a review entity.
     *
     * @Route("/{id}/delete",   name="review_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Review $review)
    {
        $form = $this->createDeleteForm($review);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($review);
            $em->flush();
        }

        return $this->redirectToRoute('review_index');
    }

    /**
     * Creates a form to delete a review entity.
     *
     * @param Review $reservation The reservation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Review $review)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('review_delete', array('id' => $review->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }
    }
