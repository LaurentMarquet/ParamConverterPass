<?php

namespace App\Controller;

use App\Entity\Player;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/player/{id}",
     *     name="player_display",
     *     requirements={"id": "^([0-9]+)$"},
     *     methods={"GET","HEAD"})
     */

    public function display(Player $player)
    {
        return new JsonResponse($player->toArray());
    }
}
