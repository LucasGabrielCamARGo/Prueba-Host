<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Online Tutor
 */

$online_tutor_post_page_title =  get_theme_mod( 'online_tutor_post_page_title', 1 );
$online_tutor_post_page_meta =  get_theme_mod( 'online_tutor_post_page_meta', 1 );
$online_tutor_post_page_btn = get_theme_mod( 'online_tutor_post_page_btn', 1 );
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };
      };
    ?> 
    <div class="serv-cont">
      <div class="entry-summary p-3 m-0">      
        <?php if ($online_tutor_post_page_title == 1 ) {?>
          <?php the_title('<h3 class="entry-title pb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');?>
        <?php }?>

        <p><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
        <?php if ($online_tutor_post_page_btn == 1 ) {?>
          <a href="<?php the_permalink(); ?>" class="btn-text"><?php esc_html_e('Read Full','online-tutor'); ?><i class="fas fa-long-arrow-alt-right ml-3"></i></a>
        <?php }?>
      </div>
      <?php if ($online_tutor_post_page_meta == 1 ) {?>
        <div class="meta-info-box">
          <span class="entry-view"><i class="fas fa-eye mr-2"></i> <?php echo esc_html(online_tutor_gt_get_post_view()); ?></span>
          <span class="entry-time ml-3"><i class="fas fa-clock mr-2"></i> <?php echo esc_html( get_the_time() ); ?></span>
          <span class="ml-3"><i class="fas fa-comments mr-2"></i> <?php comments_number( esc_attr('0', 'online-tutor'), esc_attr('0', 'online-tutor'), esc_attr('%', 'online-tutor') ); ?> <?php esc_html_e('Comments','online-tutor'); ?></span>
        </div>
      <?php }?>
    </div>
  </article>