<?php

namespace Drupal\like_and_dislike\Model;

/**
 * @file
 */
class Entity {

  var $entity_id;
  var $entity_type;

  function __construct($entity_id, $entity_type) {
    $this->entity_id = $entity_id;
    $this->entity_type = $entity_type;
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getLikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->entity_id, 'like', $this->entity_type, $uid, $ip);
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getDislikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->entity_id, 'dislike', $this->entity_type, $uid, $ip);
  }

}
