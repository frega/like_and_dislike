<?php

namespace Drupal\like_and_dislike\Model;

/**
 * @file
 */
class Vote {

  /**
   * Manage the real like or dislike event for nodes or comments.
   * If the user has permission to vote it checks that the user has not made this
   * vote already.
   * When registers a vote it will remove all votes from user for that entity and
   * register the new vote.
   * 
   * This function is to be used with AJAX so just prints like this:
   * likecount/dislikecount/message
   * Example: 3/2/The user can't vote
   * 
   * @global type $user
   * @param type $entity_id
   * @param type $entity_type
   * @param type $action
   * @return type
   */
  static public function add($entity_id, $entity_type, $action) {

    global $user;
    $message = '';

    if (user_access('Like ' . $entity_type . ' entities')) {
      //Check if disliked
      $checkCriteria = array(
        'entity_id' => $entity_id,
        'tag' => $action == 'like' ? 'dislike' : 'like',
        'uid' => $user->uid,
        'entity_type' => $entity_type,
      );
      if ($user->uid == 0) {
        $checkCriteria['vote_source'] = ip_address();
      }
      $dislikeResult = votingapi_select_votes($checkCriteria);
      $dislikeCount = count($dislikeResult);

      if ($dislikeCount == 1) {
        print $dislikeResult->vote_id;
        votingapi_delete_votes($dislikeResult);
      }

      $vote = array(
        'entity_id' => $entity_id,
        'value' => 1,
        'tag' => $action,
        'entity_type' => $entity_type,
        'value_type' => 'points',
      );
      $setVote = votingapi_set_votes($vote);
    }
    else {
      $message = t(variable_get('like_and_dislike_vote_' . $entity_type . '_denied_msg', "You don't have permission to vote"));
    }

    // Get the updated like/dislike counts and print them with a message if any
    $criteriaLike = array(
      'entity_id' => $entity_id,
      'tag' => 'like',
      'entity_type' => $entity_type,
    );
    $criteriaDislike = array(
      'entity_id' => $entity_id,
      'tag' => 'dislike',
      'entity_type' => $entity_type,
    );

    entity_get_controller('node')->resetCache(array($entity_id));

    $likeCount = sizeof(votingapi_select_votes($criteriaLike));
    $dislikeCount = sizeof(votingapi_select_votes($criteriaDislike));
    return array(
      'likes' => $likeCount,
      'dislikes' => $dislikeCount,
      'message' => $message,
    );
  }

}
