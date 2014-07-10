<?php

namespace Drupal\like_and_dislike\Controllers\FormControllers;

class ModuleConfig extends \Drupal\cool\BaseForm {

  static public function getId() {
    return 'like_and_dislike_admin_page';
  }

  /**
   * Implementation of the configuration page.
   * It allows to change the vote denied message
   */
  static public function build() {
    $form = parent::build();
    $form['like_and_dislike_vote_denied_msg'] = array(
      '#type' => 'textfield',
      '#title' => t('Vote denied message'),
      '#description' => t("This is the message that the user will see if doesn't have permission to vote"),
      '#default_value' => variable_get('like_and_dislike_vote_denied_msg', "You don't have permission to vote"),
    );
    return system_settings_form($form);
  }

  static public function validate($form, &$form_state) {
    
  }

  static public function submit($form, &$form_state) {
    
  }

}