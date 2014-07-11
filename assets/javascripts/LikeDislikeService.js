(function() {
  window.LikeDislikeService = (function() {
    function LikeDislikeService() {}

    LikeDislikeService.likeNode = function(eid) {
      return jQuery.ajax({
        type: "GET",
        url: Drupal.settings.basePath + "like_and_dislike/like/node/add",
        data: 'entity_id=' + eid,
        success: function(msg) {
          var arrLikeCount, dislikeCount, likeCount, message;
          arrLikeCount = msg.split("/");
          likeCount = arrLikeCount[0];
          dislikeCount = arrLikeCount[1];
          message = '';
          if (arrLikeCount.length > 2) {
            message = arrLikeCount[2];
          }
          jQuery('#like-container-' + eid + ' .count').html(likeCount);
          jQuery('#dislike-container-' + eid + ' .count').html(dislikeCount);
          jQuery('#like-container-' + eid + ' .like a.entity-node').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .dislike a.entity-node').toggleClass('disable-status');
          jQuery('#like-container-' + eid + ' .throbber').hide();
          if (typeof message === "string" && message.length > 0) {
            return alert(message);
          }
        }
      });
    };

    LikeDislikeService.dislikeNode = function(eid) {
      return jQuery.ajax({
        type: "GET",
        url: Drupal.settings.basePath + "like_and_dislike/dislike/node/add",
        data: 'entity_id=' + eid,
        success: function(msg) {
          var arrLikeCount, dislikeCount, likeCount, message;
          arrLikeCount = msg.split("/");
          likeCount = arrLikeCount[0];
          dislikeCount = arrLikeCount[1];
          message = '';
          if (arrLikeCount.length > 2) {
            message = arrLikeCount[2];
          }
          jQuery('#like-container-' + eid + ' .count').html(likeCount);
          jQuery('#dislike-container-' + eid + ' .count').html(dislikeCount);
          jQuery('#like-container-' + eid + ' .like a.entity-node').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .dislike a.entity-node').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .throbber').hide();
          if (typeof message === "string" && message.length > 0) {
            return alert(message);
          }
        }
      });
    };

    LikeDislikeService.likeComment = function(eid) {
      return jQuery.ajax({
        type: "GET",
        url: Drupal.settings.basePath + "like_and_dislike/like/comment/add",
        data: 'entity_id=' + eid,
        success: function(msg) {
          var arrLikeCount, dislikeCount, likeCount, message;
          arrLikeCount = msg.split("/");
          likeCount = arrLikeCount[0];
          dislikeCount = arrLikeCount[1];
          message = '';
          if (arrLikeCount.length > 2) {
            message = arrLikeCount[2];
          }
          jQuery('#like-container-' + eid + ' .count').html(likeCount);
          jQuery('#dislike-container-' + eid + ' .count').html(dislikeCount);
          jQuery('#like-container-' + eid + ' .like a.entity-comment').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .dislike a.entity-comment').toggleClass('disable-status');
          jQuery('#like-container-' + eid + ' .throbber').hide();
          if (typeof message === "string" && message.length > 0) {
            return alert(message);
          }
        }
      });
    };

    LikeDislikeService.dislikeComment = function(eid) {
      return jQuery.ajax({
        type: "GET",
        url: Drupal.settings.basePath + "like_and_dislike/dislike/comment/add",
        data: 'entity_id=' + eid,
        success: function(msg) {
          var arrLikeCount, dislikeCount, likeCount, message;
          arrLikeCount = msg.split("/");
          likeCount = arrLikeCount[0];
          dislikeCount = arrLikeCount[1];
          message = '';
          if (arrLikeCount.length > 2) {
            message = arrLikeCount[2];
          }
          jQuery('#like-container-' + eid + ' .count').html(likeCount);
          jQuery('#dislike-container-' + eid + ' .count').html(dislikeCount);
          jQuery('#like-container-' + eid + ' .like a.entity-comment').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .dislike a.entity-comment').toggleClass('disable-status');
          jQuery('#dislike-container-' + eid + ' .throbber').hide();
          if (typeof message === "string" && message.length > 0) {
            return alert(message);
          }
        }
      });
    };

    return LikeDislikeService;

  })();

}).call(this);
