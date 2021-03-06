<?php
/**
 * @file
 * Theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: Node body or teaser depending on $teaser flag.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $submitted: Themed submission information output from
 *   theme_node_submitted().
 * - $links: Themed links like "Read more", "Add new comment", etc. output
 *   from theme_links().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 *   The following applies only to viewers who are registered users:
 *   - node-by-viewer: Node is authored by the user currently viewing the page.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $build_mode: Build mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $build_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * The following variable is deprecated and will be removed in Drupal 7:
 * - $picture: This variable has been renamed $user_picture in Drupal 7.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see zen_preprocess()
 * @see zen_preprocess_node()
 * @see zen_process()
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  <div class="body-car_for_sale">
    <!--Images fnd ields    -->
    <div class="body-1-car_for_sale">

      <div class="body-1-1-car_for_sale">
        <?php print $node->content['field_images']['#children']; ?>
      </div>


      <div class="body-1-2-car_for_sale">

        <div class="cfs-1-2-1"> <?php print $node->title; ?> </div>

        <div class="cfs-1-2-2">
          <?php
          foreach ($node->content as $field_name => $field) {
            if ((preg_match('/field_/', $field_name)) && ($field_name != 'field_images')
              && ($field_name != 'field_price') && (isset($field['#children']))
            ) {
              ?><div class="cfs-1-2-2-n"> <?php print $field['#children'];?> </div>
                  <?php
            }
          }
          ?>
        </div>
        <div class="cfs-1-2-3"><?php if ( isset( $node->content['fivestar_widget'] )) print $node->content['fivestar_widget']['#value'] ?></div>

      </div>

    </div>
    <!--Description -->
    <div class="body-2-car_for_sale">
      <div class="body-2-car_for_sale-label">Description:</div>
      <div class="body-2-car_for_sale-text">
        <?php print $cs_node_teaser; ?>
      </div>
      <div>
        <button id=<?php print $node->nid;?> class="button_show_all_body">All..</button>
      </div>
    </div>

    <!--    Button-->
    <div class="body-3-car_for_sale">
      <div class="body-3-car_for_sale-button">
        <?php if (!user_is_anonymous()) {
                print($node->content['add_to_cart']['#value']);
              }
              else {print('For buy, login please.'); };
              ?>
        </div>
      <!--      <button class = body-3-car_for_sale-button-button >Buy</button>-->
      <div class="body-3-car_for_sale-price">
        <?php print($node->content['display_price']['#value']) ?>
      </div>
    </div>
    <!--Gmap-->

    <div class="cs_gmap">
      <div class="cs_location" >
        <?php
        if ( isset( $node->content['locations']['#value'] ) && $node->content['locations']['#value'] )
          print $node->content['locations']['#value'];
        ?>
      </div>

      <div class="cs_map" >
        <?php print gmap_simple_map($node->location['latitude'], $node->location['longitude'],'', $node->location['city'].' '.$node->location['street'],3,'default','default',TRUE) ; ?>

<!--        --><?php //print gmap_location_node_page($node->nid) ; ?>
<!--        --><?php //$output_gmap=gmap_location_block_view($node->nid);
//          if ( !isset( $output_gmap['content'] )) print( $output_gmap['content']);
//        ?>
      </div>
    </div>
  </div>
</div><!-- /.node -->
