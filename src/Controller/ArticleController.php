<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function  homepage(){
        return new Response('this is my first page');
    }

    /**
     * @Route("/{slug}")
     */
    public function  newArticle($slug){
        $comments=[
            "Bob called an all-hands this afternoon. Knowledge is power what are the expectations and feature creep, gain alignment sorry i didn't get your email but i dont care if you got some copy, why you dont use officeipsumcom or something like that ? and quantity.",
            "Due diligence nobody's fault it could have been managed better. Not the long pole in my tent. Do i have consent to record this meeting where the metal hits the meat and we need to aspirationalise our offerings but on-brand but completeley fresh and we need to have a Come to Jesus meeting with Phil about his attitude, or pig in a python what's our go to market strategy?.",
            "Nail it down 4-blocker level the playing field highlights yet how much bandwidth do you have what about scaling components to a global audience? feed the algorithm. Parallel path can you put it on my calendar?, 60% to 30% is a lot of persent pivot we need to have a Come to Jesus meeting with Phil about his attitude, yet we have put the apim bol, temporarily so that we can later put the monitors on, and make sure to include in your wheelhouse. We need evergreen content slow-walk our commitment moving the goalposts, nor guerrilla marketing, what the so in this space enough to wash your face."
        ];
        return $this->render('layout/home.html.twig',[
            'title'=>ucwords(str_replace("-", " ", $slug)),
            'comments'=>$comments
        ]);
    }
}