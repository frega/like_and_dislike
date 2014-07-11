<?php
/**
 * This tpl handles the like link and its look and feel.
 * Variables avaiable:
 * @entity_id: the entity id of the entity on which the link is getting printed.
 * @likes: the number is likes that is casted to the node/comment.
 */
?>
<div class="like-and-dislike-container like type-<?php print $entity_type ?>" id="like-container-<?php print $entity_type ?>-<?php print $entity_id ?>">
  <div class="inner">
    <div class="link">
      <a title="Like"
         data-entity-id="<?php print $entity_id ?>"
         data-entity-type="<?php print $entity_type ?>"
         class="<?php if ($likestatus == 1) print ' disable-status' ?>">
        Like <span class="count"><?php print $likes; ?></span>
      </a>
      <span style="display:none" class="throbber">Loading...</span>
    </div>
  </div>
</div>