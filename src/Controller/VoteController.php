<?php

/**
 * @file
 * Contains \Drupal\like_and_dislike\Controller\VoteController.
 */

namespace Drupal\like_and_dislike\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\votingapi\Entity\Vote;
use Drupal\votingapi\Entity\VoteType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Returns responses for Like & Dislikes routes.
 */
class VoteController extends ControllerBase implements ContainerInjectionInterface {

  protected $request;

  /**
   * {@inheritdoc}
   */
  function vote($entity_type_id, $vote_type_id, $entity_id, Request $request) {
    // TODO: $vote_type = VoteType::load();
    $vote = Vote::create(['type' => $vote_type_id]);
    $vote->setVotedEntityId($entity_id);
    $vote->setVotedEntityType($entity_type_id);
    $vote->setValueType('points');
    $vote->setValue(1);
    $vote->save();

    drupal_set_message(t('Your :type vote was added.', [
      ':type' => $vote_type_id
    ]));

    $url = $request->getUriForPath($request->getPathInfo());
    return new RedirectResponse($url);
  }
}