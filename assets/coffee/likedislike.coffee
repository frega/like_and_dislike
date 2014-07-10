(($) ->

  Drupal.behaviors.LikeDislike = attach: (context, settings) ->

  $(document).ready ($) ->
    #This is handling the click on the like link for node only.
    $('.like-container-entity-node .like a').click ->
      nid = $(this).data 'eid'
      LikeDislikeService.likeNode nid

    #This is handling the click on the dislike link for node only.
    $('.dislike-container-entity-node .dislike a').click ->
      nid = $(this).data 'eid'
      LikeDislikeService.dislikeNode nid

    #This is handling the click on the like link for comments only.
    $('.like-container-entity-comment .like a').click ->
      cid = $(this).data 'eid'
      LikeDislikeService.likeComment cid

    #This is handling the click on the dislike link for node only.
    $('.dislike-container-entity-comment .dislike a').click ->
      cid = $(this).data 'eid'
      LikeDislikeService.dislikeComment cid
    return
  
) jQuery