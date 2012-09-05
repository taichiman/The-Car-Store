<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to cs_zen_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: cs_zen_breadcrumb()
 *
 *   where cs_zen is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Implementation of HOOK_theme().
 */
function cs_zen_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}


/**
 * Implementation of template_preprocess_page().
 */
function cs_zen_preprocess_page(&$variables) {

 if ((array_key_exists('node', $variables))&&($variables['node']->type == 'car_for_sale')) {
    $variables['title'] = '';
  }
}

// comment in warnings times
//@todo_den
//  if (arg(0) == 'node' && is_numeric(arg(1))) {
//    $node = node_load(arg(1));
//    $sug[] = 'page-' . $node->type;
//    $variables['template_files'] = $sug;
//    krumo($variables);
//  }
//}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function cs_zen_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function cs_zen_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // To remove a class from $classes_array, use array_diff().
  //$vars['classes_array'] = array_diff($vars['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function cs_zen_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // cs_zen_preprocess_node_page() or cs_zen_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $vars['node']->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function cs_zen_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function cs_zen_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */





///**
// * Helper function that builds the nested lists of a Nice menu.
// *
// * @param $menu
// *   Menu array from which to build the nested lists.
// * @param $depth
// *   The number of children levels to display. Use -1 to display all children
// *   and use 0 to display no children.
// * @param $trail
// *   An array of parent menu items.
// */
//function cs_zen_nice_menus_build($menu, $depth = -1, $trail = NULL) {
//  $output = '';
//  // Prepare to count the links so we can mark first, last, odd and even.
//  $index = 0;
//  $count = 0;
//  foreach ($menu as $menu_count) {
//    if ($menu_count['link']['hidden'] == 0) {
//      $count++;
//    }
//  }
//  // Get to building the menu.
//  foreach ($menu as $menu_item) {
//    $mlid = $menu_item['link']['mlid'];
//    // Check to see if it is a visible menu item.
//    if (!isset($menu_item['link']['hidden']) || $menu_item['link']['hidden'] == 0) {
//      // Check our count and build first, last, odd/even classes.
//      $index++;
//      $first_class = $index == 1 ? ' first ' : '';
//      $oddeven_class = $index % 2 == 0 ? ' even ' : ' odd ';
//      $last_class = $index == $count ? ' last ' : '';
//      // Build class name based on menu path
//      // e.g. to give each menu item individual style.
//      // Strip funny symbols.
//      $clean_path = str_replace(array('http://', 'www', '<', '>', '&', '=', '?', ':', '.'), '', $menu_item['link']['href']);
//      // Convert slashes to dashes.
//      $clean_path = str_replace('/', '-', $clean_path);
//      $class = 'menu-path-'. $clean_path;
//      if ($trail && in_array($mlid, $trail)) {
//        $class .= ' active-trail';
//      }
//      // If it has children build a nice little tree under it.
//      if ((!empty($menu_item['link']['has_children'])) && (!empty($menu_item['below'])) && $depth != 0) {
//        // Keep passing children into the function 'til we get them all.
//        $children = theme('nice_menus_build', $menu_item['below'], $depth, $trail);
//        // Set the class to parent only of children are displayed.
//        $parent_class = ($children && ($menu_item['link']['depth'] <= $depth || $depth == -1)) ? 'menuparent ' : '';
//        $output .= '<li class="menu-' . $mlid . ' ' . $parent_class . $class . $first_class . $oddeven_class . $last_class .'">'.theme('menu_item_link', $menu_item['link']);
//        // Check our depth parameters.
//        if ($menu_item['link']['depth'] <= $depth || $depth == -1) {
//          // Build the child UL only if children are displayed for the user.
//          if ($children) {
//            $output .= '<ul>';
//            $output .= $children;
//            $output .= "</ul>\n";
//          }
//        }
//        $output .= "</li>\n";
//      }
//      else {
//        $output .= '<li class="menu-' . $mlid . ' ' . $class . $first_class . $oddeven_class . $last_class .'">'. theme('menu_item_link', $menu_item['link']) .'</li>'."\n";
//      }
//    }
//  }
//  return $output;
//}



//test theme_hooks
//
//function cs_zen_my_markup() {
//  $html = '<p>' . t('This is some HTML from template.php.') . '</p>'.'Amazingly, this work!';
//  $html.='<p>'.time();
//  return $html;
//}



function cs_show_button_add_to_cart( $node ) {
  $output = '<div class="add-to-cart">';
  if ($node->nid) {
    $output .= drupal_get_form('uc_product_add_to_cart_form_'. $node->nid, $node);
  }
  else {
    $output .= drupal_get_form('uc_product_add_to_cart_form', $node);
  }
  $output .= '</div>';
  return $output;

}

//For stock level set to 1 for new product

function cs_zen_uc_product_add_to_cart($node, $teaser = 0, $page = 0) {

  $stocklevel = uc_stock_level($node->model);

  if (is_numeric($stocklevel)) {
    // Stock tracking is active

//    @todo_den закомментированно для теста отправки писем при покупке

    if ($stocklevel <= 0) {
//    if ($stocklevel > 100500) {
      return '<div class="add-to-cart out-of-stock">' . t('Out of stock') . '</div>';
    }
    else {
      return cs_show_button_add_to_cart($node);
    }
  }
  else {
    // Stock tracking is not being used for this product, just show the add to cart button as normal
    return theme_uc_product_add_to_cart( $node );
  }


}

//test git work
