<?php?>
 <div class="meta">
    <em>by</em> <?php the_author() ?> | <?php the_date('F jS, Y', '<span class="time">', '</span>'); ?>
    <span id="comment_bubble"><?php comments_popup_link( 'No comments yet', '1 comment', '% comments', 'post-comments', 'Comments are off for this post'); ?></span>
</div>