<?php
/**
 * Created by JetBrains PhpStorm.
 * User: densom
 * Date: 8/21/12
 * Time: 6:35 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<table id=email_bad_car>
  <tr>
    <td>
      DearAdmin, my name:
    </td>
    <td>
      <?php echo $message['params']['name'] ?>
    </td>
  <tr>
  <tr>
    <td bgcolor=red>
      Bad description car:
    </td>
    <td>
      <?php echo $message['params']['link_to_car'] ?>
    </td>
  <tr>
  <tr>
    <td>
      <?php echo $message['params']['message'] ?>
    </td>
  </tr>
</table>
