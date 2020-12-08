<?php
  /* TEMPLATE NAME: Team */
  get_header();
  get_template_part('modules/team', 'header');
  $teamList = get_field('arrange');
  if($teamList) {
    ex_wrapper('start', 'team');
      echo '<nav class="module-team-wrap">';
        foreach($teamList as $t) {
          $id = $t->ID;
          $imgUrl = get_the_post_thumbnail_url($id, 'medium');
          $imgFull = get_the_post_thumbnail($id, 'medium');   
          echo '<a href="' . get_the_permalink($id) . '" class="team-single">';
          echo '<div class="team-bg" style="background-image: url(' . $imgUrl . ')">' . $imgFull . '</div>';
          echo '<h2>' . get_the_title($id) . '</h2>';
          $subTitle = get_field('sub_title', $id);
          echo '<h3>' . $subTitle . '</h3>';
          echo '</a>';
        }
      echo '</nav>';
    ex_wrapper('end');
    get_template_part('modules/team', 'footer');
  }
  get_footer();
?>
