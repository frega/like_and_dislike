(($) ->

  Drupal.behaviors.LikeDislike = attach: (context, settings) ->

  $(document).ready ($) ->
    #This is handling the click on the like link for node only.
    $('.like_and_dislike-container.type-entity-node.like a').click ->
      $('.like_and_dislike-container.type-entity-node.like .throbber').show()
      nid = $(this).data 'eid'
      LikeDislikeService.likeNode nid

    #This is handling the click on the dislike link for node only.
    $('.like_and_dislike-container.type-entity-node.dislike a').click ->
      $('.like_and_dislike-container.type-entity-node.dislike .throbber').show()
      nid = $(this).data 'eid'
      LikeDislikeService.dislikeNode nid

    #This is handling the click on the like link for comments only.
    $('.like_and_dislike-container.type-entity-comment.like a').click ->
      $('.like_and_dislike-container.type-entity-comment.like .throbber').show()
      cid = $(this).data 'eid'
      LikeDislikeService.likeComment cid

    #This is handling the click on the dislike link for node only.
    $('.like_and_dislike-container.type-entity-comment.dislike a').click ->
      $('.like_and_dislike-container.type-entity-comment.dislike .throbber').show()
      cid = $(this).data 'eid'
      LikeDislikeService.dislikeComment cid
    return
  
) jQuery