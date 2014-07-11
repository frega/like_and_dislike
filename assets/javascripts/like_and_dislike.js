(function() {
  (function($) {
    Drupal.behaviors.LikeDislike = {
      attach: function(context, settings) {}
    };
    return $(document).ready(function($) {
      $('.like-and-dislike-container.like a').click(function() {
        var entity_id, entity_type;
        entity_id = $(this).data('entity-id');
        entity_type = $(this).data('entity-type');
        $('#like-container-' + entity_type + '-' + entity_id + ' .throbber').show();
        return LikeDislikeService.vote(entity_id, entity_type, 'like');
      });
      return $('.like-and-dislike-container.dislike a').click(function() {
        var entity_id, entity_type;
        entity_id = $(this).data('entity-id');
        entity_type = $(this).data('entity-type');
        $('#dislike-container-' + entity_type + '-' + entity_id + ' .throbber').show();
        return LikeDislikeService.vote(entity_id, entity_type, 'dislike');
      });
    });
  })(jQuery);

}).call(this);
