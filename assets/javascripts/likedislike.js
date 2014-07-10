(function() {
  (function($) {
    Drupal.behaviors.LikeDislike = {
      attach: function(context, settings) {}
    };
    return $(document).ready(function($) {
      $('.like-container-entity-node .like a').click(function() {
        var nid;
        nid = $(this).data('eid');
        return LikeDislikeService.likeNode(nid);
      });
      $('.dislike-container-entity-node .dislike a').click(function() {
        var nid;
        nid = $(this).data('eid');
        return LikeDislikeService.dislikeNode(nid);
      });
      $('.like-container-entity-comment .like a').click(function() {
        var cid;
        cid = $(this).data('eid');
        return LikeDislikeService.likeComment(cid);
      });
      $('.dislike-container-entity-comment .dislike a').click(function() {
        var cid;
        cid = $(this).data('eid');
        return LikeDislikeService.dislikeComment(cid);
      });
    });
  })(jQuery);

}).call(this);
