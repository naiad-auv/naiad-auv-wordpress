<div class="clear20"></div>
<h2><?php comments_number(__('', 'nimbus_opulus_sombre'), __('1 Comment', 'nimbus_opulus_sombre'), __('% Comments', 'nimbus_opulus_sombre')); ?></h2>
<div class="clear20"></div>

<?php if (post_password_required()) : ?>

    <p class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.', 'nimbus_opulus_sombre'); ?></p>

    <?php return;
endif;
?>

<?php if (have_comments()) { ?>

    <?php $comments_by_type = &separate_comments($comments); ?>

        <?php if (!empty($comments_by_type['comment'])) { ?>
        <ol id="comments">	
        <?php wp_list_comments(array('type' => 'comment', 'callback' => 'nimbus_comment', 'avatar_size' => 75, 'reply_text' => __('Reply', 'nimbus_opulus_sombre'))); ?>
        </ol>		
    <?php } ?>

    <div class="navigation">
        <div class="alignleft">
    <?php previous_comments_link() ?>
        </div>
        <div class="alignright">
    <?php next_comments_link() ?>
        </div>
    </div>

        <?php if (!empty($comments_by_type['pings'])) { ?>
        <ol>
        <?php wp_list_comments(array('type' => 'pings', 'callback' => 'nimbus_ping')); ?>
        </ol>
    <?php } ?>

<?php } else { ?>
    <div id="comment-section" class="nocomments">

    <?php if ('open' == $post->comment_status) { ?>
            <p><?php _e('Be the first to comment.', 'nimbus_opulus_sombre'); ?></p>

    <?php } else { ?>
            <!-- If comments are closed. -->


    <?php } ?>

    </div>
<?php } ?>

<?php
if ('open' == $post->comment_status) {

    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields = array(
        'author' => '<p class="comment-form-author"><label for="author">' . __('Name', 'nimbus_opulus_sombre') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></p>',
        'email' => '<p class="comment-form-email"><label for="email">' . __('Email', 'nimbus_opulus_sombre') . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) . '<input id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></p>',
        'url' => '<p class="comment-form-url"><label for="url">' . __('Website', 'nimbus_opulus_sombre') . '</label><input id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></p>'
    );

    $modified_defaults = array(
        'fields' => apply_filters('comment_form_default_fields', $fields),
        'comment_field' => '<div class="span5"><p><label for="comment">Comment</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p></div></div>',
        'must_log_in' => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
        'logged_in_as' => '<div class="row"><div class="span3"><p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p></div>',
        'comment_notes_before' => '',
        'comment_notes_after' => '<p class="form_allowed_tags">' . sprintf(__('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s'), ' <code>' . allowed_tags() . '</code>') . '</p>',
        'id_form' => 'commentform',
        'id_submit' => 'submit',
        'title_reply' => 'Leave a Reply',
        'title_reply_to' => 'Leave a Reply to %s',
        'cancel_reply_link' => 'Cancel reply',
        'label_submit' => 'Submit',
    );
    ?>

    <?php comment_form($modified_defaults); ?>

<?php } else { ?>

<?php } ?>

