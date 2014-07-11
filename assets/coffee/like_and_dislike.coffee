(($) ->

  Drupal.behaviors.LikeDislike = attach: (context, settings) ->

  $(document).ready ($) ->
    #This is handling the click on the Like link
    $('.like-and-dislike-container.like a').click ->
      entity_id = $(this).data 'entity-id'
      entity_type = $(this).data 'entity-type'
      $('#like-container-' + entity_type + '-' + entity_id + ' .throbber').show()
      LikeDislikeService.vote entity_id, entity_type, 'like'

    #This is handling the click on the Dislike link
    $('.like-and-dislike-container.dislike a').click ->
      entity_id = $(this).data 'entity-id'
      entity_type = $(this).data 'entity-type'
      $('#dislike-container-' + entity_type + '-' + entity_id + ' .throbber').show()
      LikeDislikeService.vote entity_id, entity_type, 'dislike'

) jQuery