<?php

namespace Drupal\like_and_dislike\Controllers\PageControllers;

/**
 * @file
 */
class NodeDislikeCallback extends BaseLikeDislikeVoteCallback {

  static public function getEntityType() {
    return 'node';
  }

  static public function getTagName() {
    return 'dislike';
  }

}
