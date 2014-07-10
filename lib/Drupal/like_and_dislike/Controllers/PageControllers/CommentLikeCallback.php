<?php

namespace Drupal\like_and_dislike\Controllers\PageControllers;

/**
 * @file
 */
class CommentLikeCallback extends BaseLikeDislikeVoteCallback {

  static public function getEntityType() {
    return 'comment';
  }

  static public function getTagName() {
    return 'like';
  }

}
