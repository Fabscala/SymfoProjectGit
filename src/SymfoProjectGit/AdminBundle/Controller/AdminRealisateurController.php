<?php

namespace SymfoProjectGit\AdminBundle\Controller;

use SymfoProjectGit\CinemaBundle\Entity\Realisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use SymfoProjectGit\AdminBundle\Form\RealisateurType;
use SymfoProjectGitAdminBundle;

/**
* @Route("/admin/realisateurs")
*/

class AdminRealisateurController extends Controller
{
    /**
    * @Route("/ajout", name="admin_realisateur_ajout")
    */
    public function addAction(Request $request)
    {
        $realisateur = new Realisateur(); //on crée un nouveau Genre vide
        $form = $this->createForm(RealisateurType::class, $realisateur); //on le lie à un formulaire de type GenreType

        $form->handleRequest($request); //on lie le formulaire à la requête HTTP

        if ($form->isSubmitted() && $form->isValid()) { //si le formulaire a bien été soumis et qu'il est valide
            $realisateur = $form->getData(); //on crée un objet Genre avec les valeurs du formulaire soumis

            $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire d'entités de Doctrine

            $em->persist($realisateur); //on s'en sert pour enregistrer le genre (mais pas encore dans la base de données)

            $em->flush(); //écriture en base de toutes les données persistées

            return $this->redirectToRoute('admin_realisateur_liste'); //puis on redirige l'utilisateur vers la page des genres
        }

        return $this->render(
            'SymfoProjectGitAdminBundle:Realisateur:form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
    * @Route("/liste", name="admin_realisateur_liste")
    */
    public function listAction()
    {
        $realisateurs = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->findAll();

        return $this->render(
            'SymfoProjectGitAdminBundle:Realisateur:list.html.twig',
            ['realisateurs' => $realisateurs]
        );
    }

    /**
    * @Route("/modif/{id}", name="admin_realisateur_modif", requirements={"id": "\d+"})
    */
    public function editAction(Request $request, $id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $realisateur = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->find($id);

        $form = $this->createForm(RealisateurType::class, $realisateur); //on le lie à un formulaire de type GenreType
        //Le formulaire sera donc prérempli avec les données de l'objet Genre récupéré en base de données.

        //puis on exécute le même traitement que pour l'ajout
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $realisateur = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();

            return $this->redirectToRoute('admin_realisateur_liste');
        }

        return $this->render(
            'SymfoProjectGitAdminBundle:Realisateur:form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
    * @Route("/supprimer/{id}", name="admin_realisateur_supprimer", requirements={"id": "\d+"})
    */
    public function deleteAction($id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $realisateur = $this->getDoctrine()->getRepository('SymfoProjectGitCinemaBundle:Realisateur')->find($id);

        $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire
        $em->remove($realisateur); //on supprime cette entité
        $em->flush(); //exécution en base

        return $this->redirectToRoute('admin_realisateur_liste'); //redirection vers la liste
    }
}

?>