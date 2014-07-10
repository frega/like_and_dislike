<?php

namespace Drupal\like_and_dislike\Controllers\PageControllers;

/**
 * @file
 */
abstract class BaseLikeDislikeVoteCallback implements \Drupal\cool\Controllers\PageController {

  static protected function getEntityType() {
    // Placeholder, as PHP doesn't gives STRICT warnings for abstract static methods
  }

  static protected function getTagName() {
    // Placeholder, as PHP doesn't gives STRICT warnings for abstract static methods
  }

  static public function getPath() {
    $class = get_called_class();
    return 'like_and_dislike/' . $class::getTagName() . '/' . $class::getEntityType() . '/add';
  }

  static public function accessCallback() {
    return TRUE;
  }

  static public function getDefinition() {
    return array(
      'type' => MENU_CALLBACK,
    );
  }

  static public function pageCallback() {
    $class = get_called_class();
    static::process($class::getTagName());
  }

  /**
   * Handles the when a node or comment is voted with a like.
   * This functions uses a general function to register the vote
   * This function is to be used with AJAX so just prints the counts and message
   */
  static public function process($tag_name) {
    if ($_GET['entity_id']) {
      // Get the information of type of entity and entity ID
      $eid = intval($_GET['entity_id']);
      $entity_type = static::getEntityType();
      $data = \Drupal\like_and_dislike\Model\Vote::add($eid, $entity_type, $tag_name);
      print $data['likes'] . "/" . $data['dislikes'] . "/" . $data['message'];
    }
  }

}
