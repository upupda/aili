<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>">

  <?php print render($content['field_images']); ?>


  <h3 class="post-title" <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>" style="border-bottom: none;"><?php print $title; ?></a></h3>

  <span class="submitted">
    <?php print format_date($node->created, 'custom', 'M d Y'); ?>
    <strong> - By: </strong> <?php print $name; ?>
  </span>

  <div><br /></div>
  <?php print render($content['field_subtitle']); ?>

  <?php
    hide($content['field_subtitle']);
    hide($content['links']);
    hide($content['field_images']);
    hide($content['comments']);
    print render($content);
  ?>

  <br />

</div> <!-- /node-->
