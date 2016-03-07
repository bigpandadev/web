<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StoryController extends Controller {
    /**
     * @Route("/stories", name="story")
     */
    public function indexAction() {
        return $this->render('story/index.html.twig');
    }
    
    /**
     * 
     * @Route("/story/{id}", name="story_read", 
     *                       requirements={
     *                          "id": "\d+"
     * })
     * 
     * #defaults={ "id": 0 }
     */
    public function readAction($id) {
        
        // return if id is wrong
        if($id < 1) {
            return $this->render('story/read.html.twig', array() );
        }
        
        
        $storyId = $id;
        
        return $this->render('story/read.html.twig', array(
            'story' => array(
                'id' => $storyId,
                'title' => 'Test story',
                'details' => array(
                    'date' => '06.03.2016.',
                    'authors' => array(
                        array(
                            'id' => 23,
                            'first_name' => 'Matija',
                            'last_name' => 'Belec',
                        ),
                    ),
                ),
                'segments' => array(
                    array(
                        'type'=>'title',
                        'text'=>'Subtitle test'
                    ),
                    array(
                        'type'=>'text', 
                        'text'=>'Subtitle test'
                    ),
                    array(
                        'type'=>'image', 
                        'src'=>'/test.png', 
                        'alt'=>'Not found image'
                    ),
                    array(
                        'type'=>'text', 
                        'text'=>'Subtitle test'
                    ),
                    array(
                        'type'=>'subtitle', 
                        'text'=>'Subtitle test'
                    ),
                    array(
                        'type'=>'text', 
                        'text'=>'Subtitle test'
                    ),
                ),
            )
        ) );
    }
}
