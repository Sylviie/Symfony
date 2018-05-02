<?php

namespace EmploiBundle\Controller;

use EmploiBundle\Entity\shs_emploi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('EmploiBundle:Default:index.html.twig');
    }


    /**
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route("/home")
     */
    public function homeAction()
    {
        //récupérer toutes les informations de tables qhq_emplois et shs_category
        $emplois = $this->getDoctrine()->getRepository("EmploiBundle:shs_emploi")->findAll();
        $category = $this->getDoctrine()->getRepository("EmploiBundle:shs_category")->findAll();

        //Récupérer chaque catégorie dans les tables de shs_emploi
        $repertoire = $this->getDoctrine()->getRepository("EmploiBundle:shs_emploi");
        $developement = $repertoire->findBy(array("category" => "Programming"));
        $management = $repertoire->findBy(array("category" => "Management"));
        $enseignement = $repertoire->findBy(array("category" => "Enseignement"));
       // $design = $repertoire->findBy(array("category" => "Design"));

        //renvoyer les données à la vue
        return $this->render("EmploiBundle:Default:homePage.html.twig",
            array(
                "viewEmplois" => $emplois,
                "viewCategorys" => $category,
                "viewProgramming" => $developement,
                "viewManagement" => $management,
                "viewEnseignement" => $enseignement));
                //"viewDesign" => $design));
    }


    /**
     * @param $emploi
     * @Route("/home")  requirement="\a-zA-Z\+"
     */

    public function searchAction($emploiName)
    {
        $emploiQuerry = $this->getDoctrine()
            ->getRepository("EmploiBundle: shs_emploi")
            ->findBy(array(
                "postion" => $emploiName
            ));
        if ($emploiQuerry) {

            return $this->render("EmlpoiBundle:Defualt:homePage.html.twig", array("fund" => $emploiQuerry));


        }
    }

}
