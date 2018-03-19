<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
<<<<<<< HEAD
  use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\StringType;
    use HTL\ImmobilierBundle\Entity\Bien;
    use HTL\ImmobilierBundle\Entity\Image;
    use HTL\ImmobilierBundle\Entity\Localite;
    use HTL\ImmobilierBundle\Entity\Contrat;
    use HTL\ImmobilierBundle\Entity\ContratPro;
    use HTL\ImmobilierBundle\Entity\Typebien;
    use HTL\ImmobilierBundle\Entity\Termecontrat;
    use HTL\ImmobilierBundle\Entity\ProprietaireBien;
        use HTL\ImmobilierBundle\Entity\Proprietaire;
    use Symfony\Component\HttpFoundation\Response;

class ReservationController extends Controller
{
     public function listepropositionAction(Request $request){
                        
                         $em = $this->getDoctrine()->getManager();
                     $bien= $em->getRepository(ProprietaireBien::class)->FindBy(array('etat' => 0 ));
                       $reservation= $this->get('knp_paginator')->paginate(
                            $bien,
                            $request->query->get('page', 1)/*le numéro de la page à afficher*/,
                              6/*nbre d'éléments par page*/
                                 );
                        return $this->render('HTLImmobilierBundle:Reservation:listeproposition.html.twig', array(
                        'reservations' => $reservation,
                                    ));
 }
   /**
     * @Route("/admin/proposition{id}",name="validerproposition")
     */
    public function ValiderPropostitionAction(Request $request,$id)
    {
  $em = $this->getDoctrine()->getManager();
  $info= $em->getRepository(ProprietaireBien::class)->FindBy(array('id' => $id,'etat'=> 0 ));
        $contrat= $em->getRepository(Termecontrat::class)->FindBy(array('id' => 1 ));
        if($request->isMethod('POST')) {
        if(isset($_POST['save'])){
         extract($_POST);
         $bien= $em->getRepository(Bien::class)->find($idbien);
         $bien->setEtat(1);
          $em->persist($bien);
          $em->flush();
         $proprietaire= $em->getRepository(Proprietaire::class)->findBy(array('id'=> $idpro));
            $clientreserve= $em->getRepository(Proprietaire::class)->find($proprietaire[0]->getId());
                
                $contrat = new ContratPro();
                $contrat->setDate(new \DateTime('now'));
                $contrat->setDuree("1ans");
                $contrat->setBien($bien);
                $contrat->setProprietaire($clientreserve);
                $em->persist($contrat);
                $em->flush();
                $info[0]->setEtat(1);
             $em->persist($info[0]);
             $em->flush();
            $snappy = $this->get('knp_snappy.pdf');
 $html = $this->renderView('HTLImmobilierBundle:Front:afficher.html.twig', array(
             'infos' => $info
        ));
        $filename = 'ContratLocation';
        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'inline; filename="'.$filename.'.pdf"'
            )
        );

                }
          }



        return $this->render('HTLImmobilierBundle:Reservation:proposition.html.twig', array(
          'propositions'=>$info,'terme'=>$contrat
        ));
    }
          public function accueilAction(Request $request){
               $em = $this->getDoctrine()->getManager();
 $typebien = $em->getRepository('HTLImmobilierBundle:Typebien')->findAll();
                            $localite = $em->getRepository('HTLImmobilierBundle:Localite')
                                ->findAll();
                    if($request->isMethod('POST')) {
                    if(isset($_POST['save'])){

                    extract($_POST);
                   //var_dump($image);die();
  $typebien=new Typebien();
              $typebien->setLibelletype($libelletype);
              $em->persist($typebien);       
                     $em->flush(); 
 				$localite=new Localite();
              $localite->setLibellelocalite($lieu);
              $em->persist($localite);           
                 $em->flush();
                 
                  $proprietaire = new Proprietaire();
              $proprietaire->setNumPiece($numpiece);
              $proprietaire->setNomComplet($nomcomplet);
              $proprietaire->setAdresse($adresse);
              $proprietaire->setTel($tel);
              $proprietaire->setEmail($email);
              $proprietaire->setCodeBanque($codebanque);
              $em->persist($proprietaire);
              $em->flush();
              $bien=new Bien();
              $bien->setNombien($nombien);
              $bien->setEtat(-1);
              $bien->setPrixlocation($prixlocation);
              $bien->setLibellelocalite($localite);
              $bien->setTypebien($typebien);
              $em->persist($bien);
              $em->flush();
              $image1=new Image();
              $image1->setImage($imagebien);
              $image1->setBien($bien);
              $em->persist($image1);$em->flush();
              $proprietaireBien = new ProprietaireBien();
              //$em = $this->getDoctrine()->getManager();
              $proprietaireBien->setProprietaire($proprietaire);
              $proprietaireBien->setBien($bien);
              $proprietaireBien->setEtat(0);
              $proprietaireBien->setAdresse($adresse);
              $em->persist($proprietaireBien);
              $em->flush();
               
        }
         
    }
 
        return $this->render('HTLImmobilierBundle:Reservation:accueil.html.twig', array(
        	'saved'=>'success','localites'=>$localite, 'typebiens'=>$typebien
           ));
         
    }
=======

class ReservationController extends Controller
{
     public function accueilAction(){
                        
                        return $this->render('HTLImmobilierBundle:Reservation:accueil.html.twig', array());

         }
>>>>>>> c7dea3f39afe44c3fc02f69a517e5def0b23e2cb
}
