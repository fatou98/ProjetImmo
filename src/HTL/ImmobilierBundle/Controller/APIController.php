<?php

namespace HTL\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
    use HTL\ImmobilierBundle\Entity\Proprietaire;

class APIController extends Controller
{
    /**
     * @Route("/api/addbien",name="proprietaire")
     * @Method({"POST"})
     */
    public function AddBienAction(Request $request)
    {
        $data = $request->getContent();
        $Proprietaire = $this->get('jms_serializer')->deserialize($data, 'HTL\ImmobilierBundle\Entity\Proprietaire', 'json');
        $em = $this->getDoctrine()->getManager();
        $em->persist($Proprietaire);
        $em->flush();

        return new Response('success', Response::HTTP_CREATED);
    }

    /**
     * @Route("/api/editbien/{id}")
     * @Method({"GET"})
     */
    public function EditBienAction(Proprietaire $article)
    {


       $data = $this->get('jms_serializer')->serialize($article, 'json');

      if(count($data)==0){
            $reponse=array(
                "code"=>1,
                "message"=>"pas de resultat",
                "error"=>"error",
                "data"=>null
            );
        return new JsonResponse($reponse);

        }
        else{
            $reponse=array(
    "code"=>1,
    "message"=>"reussi",
    "error"=>"error",
    "data"=>json_decode($data)
);
        return new JsonResponse($reponse);


        }
    }

    /**
     * @Route("/api/deleteproprietaire/{id}")
     * @Method({"DELETE"})
     */
    public function DeleteBienAction(Proprietaire $article,$id)
    {
      
$data =  $this->getDoctrine()->getRepository('HTLImmobilierBundle:Proprietaire')->find($id);
               $Proprietaire = $this->get('jms_serializer')->serialize($data, 'json');

        $em = $this->getDoctrine()->getManager();
        $em->remove($data);
        $em->flush();

        return new Response('suprimé');
    }

    /**
     * @Route("/api/updateproprietaire/{id}")
     * @Method({"PUT"})
     */
    public function UpdateProprietaireAction(Request $request,$id)
    {
$body = $request->getContent();
$data=$this->getDoctrine()->getRepository('HTLImmobilierBundle:Proprietaire')->find($id);
$Proprietaire = $this->get('jms_serializer')->deserialize($data, 'HTL\ImmobilierBundle\Entity\Proprietaire', 'json');
        $em = $this->getDoctrine()->getManager();
        $Proprietaire->setNomComplet($body)->setAdresse($body);
        $em->persist();
        $em->flush();
        return new Response('success', Response::HTTP_CREATED);
}

    /**
     * @Route("/api/allproprietaire")
     * @Method({"GET"})
     */
    public function AllProprietaireAction()
    {
$articles = $this->getDoctrine()->getRepository('HTLImmobilierBundle:Proprietaire')->findAll();

        $data = $this->get('jms_serializer')->serialize($articles, 'json');
        if(count($data)==0){
            $reponse=array(
                "code"=>1,
                "message"=>"pas de resultat",
                "error"=>"error",
                "data"=>null
            );
        return new JsonResponse($reponse);

        }
        else{
            $reponse=array(
    "code"=>1,
    "message"=>"reussi",
    "error"=>"error",
    "data"=>json_decode($data)
);
        return new JsonResponse($reponse);


        }

        
    }

}
