<?php

namespace Drupal\like_and_dislike\Services;

/**
 * @file
 */
class VoteService {

  /**
   * This function gives back the number of votes for a particular entit with a particular type of voting.
   * For example it can be used to get number of likes and also dislikes. Just need to change the type.
   * 
   * @param type $nid the node id of the node for which number of votes is requited.
   * @param type $type the category of vote: like/dislike etc.
   * @param type $entity
   * @param type $uid
   * @param type $ip
   * @return int
   */
  static public function getEntityVoteAmount($nid, $type, $entity, $uid = NULL, $ip = NULL) {
    if ($uid === NULL) {
      $criteria = array(
        'entity_id' => $nid,
        'tag' => $type,
        'entity_type' => $entity,
      );
    }
    else {
      $criteria = array(
        'entity_id' => $nid,
        'tag' => $type,
        'uid' => $uid,
        'entity_type' => $entity,
      );
      if ($ip != NULL) {
        $criteria['vote_source'] = $ip;
      }
    }
    $count = sizeof(votingapi_select_votes($criteria));
    if (!isset($count)) {
      $count = 0;
    }
    return $count;
  }

}
