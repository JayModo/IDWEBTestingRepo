<?php
  get_header();
    if(have_posts()): while(have_posts()): the_post();
    get_template_part('modules/team', 'header');
      $title = get_the_title();
      $subTitle = get_field('sub_title');
      $question = get_field('q_and_a');
      ex_wrapper('start', 'team-details');
   
      // echo '<div class="team-details-info">';
    
     the_post_thumbnail('large');
     echo '<div class="team-details-info twocolumn-content">';
      // echo '</div>'; 
      //  echo '<div class="name-title">';
      echo '<h1 class="h-color-default h-size-medium h-align-center h-kerning h-deco h-uppercase h-underline">' . $title . '</h1>';
      echo '<h1>' . $subTitle . '</h1>';
       
      // echo '</div>';
      echo '</div>';
      echo '</div>';

ex_wrapper('end');
      echo '</div>';
     ex_wrapper('start', 'team-details');
       echo '<div id="border-line" class="row twocolumn-content">';
       echo '<div class="column">';
      echo '<h3 class="qa">';
       echo  $question ;
     echo  '</h3>';
       echo '</div>';
       
       echo '<div class="column">';
       echo '<h4>';
       the_content();
       echo '</h4>';
       echo '</div>';
       echo '</div>';
       
 ex_wrapper('end');
      get_template_part('modules/team', 'footer');

    endwhile; endif;
     
  get_footer();
  
?>
