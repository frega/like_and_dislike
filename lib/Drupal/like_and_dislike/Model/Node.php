<?php

namespace Drupal\like_and_dislike\Model;

/**
 * @file
 */
class Node {

  var $nid;

  function __construct($nid) {
    $this->nid = $nid;
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getLikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->nid, 'like', 'node', $uid, $ip);
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getDislikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->nid, 'dislike', 'node', $uid, $ip);
  }

}
