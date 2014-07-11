<?php
/**
 * This tpl handles the like link and its look and feel.
 * variables avaiable:
 * @eid: the entity id of the node/comment on which the link is getting printed.
 * @dislikes: the number is likes that is casted to the node/comment.
 */
?>
<div class="like_and_dislike-container dislike type-<?php print $entity ?>" id="dislike-container-<?php print $eid; ?>">
  <div class="inner">
    <div class="link">
      <a title="Dislike" data-eid="<?php print $eid; ?>" class="<?php if ($dislikestatus == 1) print ' disable-status' ?>">
        Like <span class="count"><?php print $dislikes; ?></span>
      </a>
      <span style="display:none" class="throbber">Loading...</span>
    </div>
  </div>
</div>
