<?php

namespace Drupal\like_and_dislike\Controllers\PageControllers;

/**
 * @file
 */
class CommentDislikeCallback extends BaseLikeDislikeVoteCallback {

  static public function getEntityType() {
    return 'comment';
  }

  static public function getTagName() {
    return 'dislike';
  }

}
