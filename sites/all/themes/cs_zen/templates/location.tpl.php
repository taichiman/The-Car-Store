<div id="cs_location_car">
  <div class="cs_adr">
    <?php if (!empty($name)): ?>
    <div class='cs_location_car_field_dash' >
      <span class="cs_location_label_name ">Title:
      </span>
      <span class="cs_location_value_name"><?php print $name; ?></span>
    </div>
    <?php endif; ?>
    <?php if (!empty($street)): ?>
    <div class='clearfix'></div>
    <div class='cs_location_car_field_dash' >
        <span class="cs_location_label_name ">Street:
        </span>
        <span class="cs_location_value_name">
          <?php print $street; ?>
          <?php if (!empty($additional)): ?>
            <?php print ' ' . $additional; ?>
          <?php endif; ?>
        </span>
      </div>
    <?php endif; ?>
    <div class='clearfix'></div>
    <div class='cs_location_car_field_dash' >
      <span class="cs_location_label_name">City:
      </span>
      <?php if (!empty($city)): ?>
        <span class="cs_location_value_name"><?php print $city; ?><?php if (!empty($province)) print ', '; ?>
          <?php endif; ?>

          <?php if (!empty($province)): ?>
            <span class="region"><?php print $province_print; ?></span>
          <?php endif; ?>
        </span>
    </div>
    <?php if (!empty($postal_code)): ?>
      <span class="postal-code"><?php print $postal_code; ?></span>
    <?php endif; ?>
    <div class='clearfix'></div>
    <div class='cs_location_car_field_dash' >
      <?php if (!empty($country_name)): ?>
      <span class="cs_location_label_name ">Country:
      </span>
      <span class="cs_location_value_name"><?php print $country_name; ?></span>
      <?php endif; ?>
    </div>
    <?php if (!empty($phone)): ?>
      <div class="tel">
        <abbr class="type" title="voice"><?php print t("Phone"); ?>:</abbr>
        <span class="value"><?php print $phone; ?></span>
      </div>
    <?php endif; ?>
    <?php if (!empty($fax)): ?>
      <div class="tel">
        <abbr class="type" title="fax"><?php print t("Fax"); ?>:</abbr>
        <span><?php print $fax; ?></span>
      </div>
    <?php endif; ?>
    <?php // "Geo" microformat, see http://microformats.org/wiki/geo ?>
    <?php if (isset($latitude) && isset($longitude)): ?>
      <?php // Assume that 0, 0 is invalid. ?>
      <?php if ($latitude != 0 || $longitude != 0): ?>
        <span class="geo"><abbr class="latitude" title="<?php print $latitude; ?>"><?php print $latitude_dms; ?></abbr>, <abbr class="longitude" title="<?php print $longitude; ?>"><?php print $longitude_dms; ?></abbr></span>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <?php if (!empty($map_link)): ?>
    <div class="map-link">
      <?php print $map_link; ?>
    </div>
  <?php endif; ?>
</div>
