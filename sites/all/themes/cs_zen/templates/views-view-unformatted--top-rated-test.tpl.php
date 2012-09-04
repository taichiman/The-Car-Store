<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 * <?php //krumo($view); ?>
 * <?php print ($view->style_plugin->rendered_fields[$id][body]); ?>
 */
?>
<?php if (!empty($title)): ?>
<h3><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
<div class="<?php print $classes[$id]; ?>">
  <?php print $row; ?>
</div>

<div class="tooltip">
  <div
    class="top_rated_tooltip_text"> <?php print (strip_tags($view->style_plugin->rendered_fields[$id]['body'])); ?> </div>

</div>
<?php endforeach; ?>
