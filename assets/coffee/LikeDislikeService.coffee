class window.LikeDislikeService

  #Handling the ajax thing for like node.
  @likeNode: (eid) ->
    jQuery.ajax(
      type: "GET",
      url: Drupal.settings.basePath + "likedislike/like/node/add"
      data: 'entity_id=' + eid
      success: (msg) ->
        arrLikeCount = msg.split("/")
        likeCount = arrLikeCount[0]
        dislikeCount = arrLikeCount[1]
        message = ''
        if (arrLikeCount.length > 2)
          message = arrLikeCount[2]

        msgDivId = "#dislike-container-" + eid + " .dislike-count-entity-node"
        jQuery(msgDivId).html(dislikeCount)

        msgDivId = "#like-container-" + eid + " .like-count-entity-node"
        jQuery(msgDivId).html(likeCount)

        imageNameLiked = "likeAct.gif"
        imageNameDislike = "dislike.gif"

        jQuery("#like-container-" + eid + ' .like a.entity-node').toggleClass('disable-status')
        jQuery("#dislike-container-" + eid + ' .dislike a.entity-node').toggleClass('disable-status')
        jQuery("#like-container-" + eid + ' .like img.entity-node').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameLiked)
        jQuery("#dislike-container-" + eid + ' .dislike img.entity-node').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameDislike)

        if (typeof message == "string" && message.length > 0)
          alert(message)
    )

  #Handling the ajax thing for dislie node.
  @dislikeNode: (eid) ->
    jQuery.ajax(
      type: "GET",
      url: Drupal.settings.basePath + "likedislike/dislike/node/add"
      data: 'entity_id=' + eid
      success: (msg) ->
        arrLikeCount = msg.split("/")
        likeCount = arrLikeCount[0]
        dislikeCount = arrLikeCount[1]
        message = ''
        if (arrLikeCount.length > 2)
          message = arrLikeCount[2]

        msgDivId = "#dislike-container-" + eid + " .dislike-count-entity-node"
        jQuery(msgDivId).html(dislikeCount)

        msgDivId = "#like-container-" + eid + " .like-count-entity-node"
        jQuery(msgDivId).html(likeCount)

        imageNameDisliked = "dislikeAct.gif"
        imageNameLike = "like.gif"

        jQuery("#dislike-container-" + eid + ' .dislike a.entity-node').toggleClass('disable-status')
        jQuery("#like-container-" + eid + ' .like a.entity-node').toggleClass('disable-status')
        jQuery("#dislike-container-" + eid + ' .dislike img.entity-node').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameDisliked)
        jQuery("#like-container-" + eid + ' .like img.entity-node').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameLike)

        if (typeof message == "string" && message.length > 0)
          alert(message)
    )

  #Handling the ajax thing for like node.
  @likeComment: (eid) ->
    jQuery.ajax(
      type: "GET",
      url: Drupal.settings.basePath + "likedislike/like/comment/add"
      data: 'entity_id=' + eid
      success: (msg) ->
        arrLikeCount = msg.split("/")
        likeCount = arrLikeCount[0]
        dislikeCount = arrLikeCount[1]
        message = ''
        if (arrLikeCount.length > 2)
          message = arrLikeCount[2]

        msgDivId = "#dislike-container-" + eid + " .dislike-count-entity-comment"
        jQuery(msgDivId).html(dislikeCount)

        msgDivId = "#like-container-" + eid + " .like-count-entity-comment"
        jQuery(msgDivId).html(likeCount)

        imageNameLiked = "likeAct.gif"
        imageNameDislike = "dislike.gif"

        jQuery("#like-container-" + eid + ' .like a.entity-comment').toggleClass('disable-status')
        jQuery("#dislike-container-" + eid + ' .dislike a.entity-comment').toggleClass('disable-status')
        jQuery("#like-container-" + eid + ' .like img.entity-comment').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameLiked)
        jQuery("#dislike-container-" + eid + ' .dislike img.entity-comment').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameDislike)

        if (typeof message == "string" && message.length > 0)
          alert(message)
    )

  #Handling the ajax thing for dislike node.
  @dislikeComment: (eid) ->
    jQuery.ajax(
      type: "GET",
      url: Drupal.settings.basePath + "likedislike/dislike/comment/add"
      data: 'entity_id=' + eid
      success: (msg) ->
        arrLikeCount = msg.split("/")
        likeCount = arrLikeCount[0]
        dislikeCount = arrLikeCount[1]
        message = ''
        if (arrLikeCount.length > 2)
          message = arrLikeCount[2]

        msgDivId = "#dislike-container-" + eid + " .dislike-count-entity-comment"
        jQuery(msgDivId).html(dislikeCount)

        msgDivId = "#like-container-" + eid + " .like-count-entity-comment"
        jQuery(msgDivId).html(likeCount)

        imageNameDisliked = "dislikeAct.gif"
        imageNameLike = "like.gif"

        jQuery("#dislike-container-" + eid + ' .dislike a.entity-comment').toggleClass('disable-status')
        jQuery("#like-container-" + eid + ' .like a.entity-comment').toggleClass('disable-status')
        jQuery("#dislike-container-" + eid + ' .dislike img.entity-comment').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameDisliked)
        jQuery("#like-container-" + eid + ' .like img.entity-comment').attr('src', Drupal.settings.basePath + likedislike_path + "/images/" + imageNameLike)

        if (typeof message == "string" && message.length > 0)
          alert(message)
    )