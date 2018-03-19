<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use HTL\ImmobilierBundle\Entity\Bien;
use HTL\ImmobilierBundle\Entity\Typebien;
use HTL\ImmobilierBundle\Entity\Localite;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("/admin/login")
     */
    public function logAction()
    {
        return $this->render('HTLImmobilierBundle:Admin:log.html.twig', array(
            // ...
        ));
    }
<<<<<<< HEAD
      
    /**
     * @Route("/admin/listebien",name="listebienadmin")
     */
     public function listBienAction()
        {
            $em = $this->getDoctrine()->getManager();
            $bien= $em->getRepository(Bien::class)->ListeBien();
=======
    
     public function listBienAction()
        {
            $em = $this->getDoctrine()->getManager();
            $bien= $em->getRepository(Bien::class)->FindAll();
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
            return $this->render('HTLImmobilierBundle:Admin:liste_bien.html.twig', array(
                'biens' => $bien,
            //...
            ));
        }
<<<<<<< HEAD
        /**
     * @Route("/admin/addlocalite" ,name="addlocalite")
     */
=======
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
        public function addlocaliteAction(Request $request){
          $em = $this->getDoctrine()->getManager();
            $Localite= $em->getRepository(Localite::class)->FindAll();
            if($request->isMethod('POST')){
                    extract($_POST);
             //var_dump($libelle);die();
                $localite=new Localite();
                $localite->setLibellelocalite($libelle);
                  $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($localite);
                    $entityManager->flush();
            //$typebien = $entityManager->getRepository(Typebien::class);
            }
         return $this->render('HTLImmobilierBundle:Admin:liste_localite.html.twig',array(
                              'Localites' => $Localite,    
)
        );
    }
<<<<<<< HEAD
    /**
     * @Route("/admin/addtypebien",name="addtypebien")
     */
=======
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
     public function addtypebienAction(Request $request){
         $em = $this->getDoctrine()->getManager();
            $libelletype= $em->getRepository(Typebien::class)->FindAll();
       if($request->isMethod('POST')){
            
                    extract($_POST);
             //var_dump($libelle);die();
                $typebien=new Typebien();
                $typebien->setLibelletype($libelle);
                  $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($typebien);
                    $entityManager->flush();
            //$typebien = $entityManager->getRepository(Typebien::class);
            }
         return $this->render('HTLImmobilierBundle:Admin:liste_typebien.html.twig',array(
                                    'libelletypes' => $libelletype,

)
        );
    }
<<<<<<< HEAD
    /**
     * @Route("/admin/addbien",name="addbien")
     */
=======
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
    public function addbienAction(Request $request){
        
         return $this->render('HTLImmobilierBundle:Admin:addbien.html.twig',array(

)
        );
    }
<<<<<<< HEAD

   
    /**
     * @Route("/test")
     */
public function loginconnectAction()
    {
        return $this->render('HTLImmobilierBundle:Admin:login.html.twig', array(
            // ...
        ));
    }
=======
   

>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
}
