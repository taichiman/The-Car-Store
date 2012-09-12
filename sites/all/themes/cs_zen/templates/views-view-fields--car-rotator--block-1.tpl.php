<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

<div class="views-field-<?php print $fields['field_images_fid']->class; ?>">
    <?php print $fields['field_images_fid']->content; ?>
</div>
<div class="views-rotator-item-data">
    <div class="views-field-<?php print $fields['field_year_value']->class; ?> ">
        <?php print $fields['field_year_value']->content; ?>
    </div>
<!--@todo_den вывести цену-->
    <div class="views-field-<?php print $fields['sell_price']->class; ?>">
        <?php print $fields['sell_price']->content; ?>
    </div>
    <div class="views-field-<?php print $fields['title']->class; ?>">
        <?php print $fields['title']->content; ?>
    </div>
</div>