<?php

namespace Drupal\like_and_dislike\Model;

/**
 * @file
 */
class Comment {

  var $cid;

  function __construct($cid) {
    $this->cid = $cid;
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getLikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->cid, 'like', 'comment', $uid, $ip);
  }

  /**
   * @param type $uid
   * @param type $ip
   * @return type
   */
  function getDislikesAmount($uid = NULL, $ip = NULL) {
    return \Drupal\like_and_dislike\Services\VoteService::getEntityVoteAmount($this->cid, 'dislike', 'comment', $uid, $ip);
  }

}
