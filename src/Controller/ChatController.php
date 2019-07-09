<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ChatController
 * @package App\Controller
 */
class ChatController extends AbstractController
{
    /**
     * @Route("/chat", name="chat")
     */
    public function index()
    {
        return $this->render('chat/index.html.twig', [
            'config' => [
                'topic' => 'chat',
                'publishRoute' => $this->generateUrl('publisher', ['topic' => 'chat'])
            ]
        ]);
    }
}
