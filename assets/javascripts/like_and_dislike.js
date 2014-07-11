(function() {
  (function($) {
    Drupal.behaviors.LikeDislike = {
      attach: function(context, settings) {}
    };
    return $(document).ready(function($) {
      $('.like_and_dislike-container.type-entity-node.like a').click(function() {
        var nid;
        $('.like_and_dislike-container.type-entity-node.like .throbber').show();
        nid = $(this).data('eid');
        return LikeDislikeService.likeNode(nid);
      });
      $('.like_and_dislike-container.type-entity-node.dislike a').click(function() {
        var nid;
        $('.like_and_dislike-container.type-entity-node.dislike .throbber').show();
        nid = $(this).data('eid');
        return LikeDislikeService.dislikeNode(nid);
      });
      $('.like_and_dislike-container.type-entity-comment.like a').click(function() {
        var cid;
        $('.like_and_dislike-container.type-entity-comment.like .throbber').show();
        cid = $(this).data('eid');
        return LikeDislikeService.likeComment(cid);
      });
      $('.like_and_dislike-container.type-entity-comment.dislike a').click(function() {
        var cid;
        $('.like_and_dislike-container.type-entity-comment.dislike .throbber').show();
        cid = $(this).data('eid');
        return LikeDislikeService.dislikeComment(cid);
      });
    });
  })(jQuery);

}).call(this);
