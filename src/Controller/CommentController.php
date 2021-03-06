<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class CommentController extends AbstractController
{

  /**
   * @Route("/comments/{id}/vote/{direction}")
   */
  public function commentVote($id, $direction)
  {

    if ($direction === 'up') {
      $currentVoteCounter = rand(7, 100);
    } else {
      $currentVoteCounter = rand(0, 5);
    }

    return $this->json(['votes' => $currentVoteCounter]);
  }
}
