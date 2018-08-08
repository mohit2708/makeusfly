<?php /* Template Name: Blog Page */ 
get_header(); ?>



<section class="blog-banner">
  <h2>Travel Diaries</h2>
</section>


<section class="blog-page">
  <div class="container">

    <div class="row">
      <div class="col-sm-8">             


                <?php



                 $args = array(
                        'post_type' => 'post',
                        'posts_per_page'=>-1,
                        'post_status' => 'publish',
                         'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                         'posts_per_page'=>3,
                          );

            $loop = new WP_Query( $args );

    ?>

     <?php  while ( $loop->have_posts() ) : $loop->the_post();?>   
 <article class="type-post">

               
                  <div class="content-header">
                    <h2 class="content-title">
                      <a href="<?php echo get_permalink( $post->ID ); ?>"><?php echo $post->post_title ?></a>
                    </h2>
                     <p class="content-meta">
                      <span>
                        <i class="fa fa-calendar"></i>
                        <time class="entry-date"><?php echo get_the_time( 'F j, Y', $post->ID ) ?></time>
                      </span>
                      <span>
                        <i class="fa fa-comments-o"></i>
                        <a href="#" class="meta-comments"> <?php echo $post->comment_count; ?> </a>
                      </span>
                      <span><i class="fa fa-eye"></i><?php if(function_exists('the_views')) { the_views(); } ?><?php //echo getPostViews(get_the_ID()); ?></span>
                    </p>
                  </div>
                 <div class="content-featured">
                    <div class="content-thumb">
                      <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>" alt="blog1">
                    </div>
                   
                  </div>
                  <div class="content-wrap">
                  
                    <div class="content-excerpt">
                      <p><?php echo substr($post->post_content, 0, 250);  ?>...</p>
                      <a href="<?php echo get_permalink( $post->ID ); ?>" class="btn btn-theme"><span>Continue Reading</span></a>
                    </div>
                  </div>
                </article>
                <?php endwhile; ?>


 <!-- pagination -->
        <ul class="pagination">
            
<?php 

$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $loop->max_num_pages
) );
?>


        </ul>


 <?php wp_reset_postdata(); ?>



                    </div>

                


                   <div class="col-sm-4">       

<div class="widget widget_recent_news">
                <h4 class="widget-title">Latest Post</h4>
                <ul>
                  <?php $args = array('post_type' => 'post','posts_per_page'=>3,'post_status' => 'publish');

            $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();?>  
                  <li>
                    <img width="60" height="60" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ));?>" alt="blog20">
                    <h5><a href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title ?></a></h5>
                    <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;<?php echo get_the_time( 'F j, Y', $post->ID ) ?></span>
                   
                  </li>
                  <?php endwhile; ?>
                 
               

                </ul>
              </div>
              
<div class="widget widget_categories">
                <h4 class="widget-title">Categories</h4>
                <ul>
<?php $category_ids = get_all_category_ids(); ?>
<?php
$args = array(
'orderby' => 'slug',
'parent' => 0
);
$categories = get_categories( $args );
foreach ( $categories as $category ) {
echo '<li><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> <i class="fa fa-angle-right"></i></li>';

}
?>
</ul>
              </div>

            












<?php 
$tags = get_tags(array(
  'hide_empty' => false
)); ?>


<div class="widget widget_tag_cloud">
                <h4 class="widget-title">Tags Cloud</h4>
                <div class="tagcloud">

<?php 

foreach ($tags as $tag) { ?>

  <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
<?php  
}
?>

  </div>
              </div>


                  
              
<div>


   
<div class="blog_numinfo">
   <?php dynamic_sidebar( 'sidebar-3' ); ?>
   </div>
        

</div>

     </div>

                   
    </div>
  </div>
</section>





<?php get_footer(); ?>