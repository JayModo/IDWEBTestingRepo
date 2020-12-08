<?php
  ex_wrapper('start', 'heading', 'module-pad-medium');
    echo '
      <header class="headings">
        <h1 class="h-color-accent h-size-small h-align-center h-deco h-kerning h-lowercase">' . get_field('sub_title', getTeamTemplate()) . '</h1>
        <h2 class="h-color-default h-size-large h-align-center h-deco h-kerning h-uppercase">' . get_the_title(getTeamTemplate()) . '</h2>
      </header>
    ';
  ex_wrapper('end');