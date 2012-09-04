<?php
$ar=Array('Denis','Sonia','Slava');

$str = implode( ', ', $ar );

/*$str="";

foreach($ar as $val){
    $str=$val.$str;
}*/

<?php print '**'; print_r($id);
      $ar=taxonomy_get_parents_all(4);

      $parrents = array();

      foreach( $ar as $val ){
          array_unshift( $parrents, $val->name);
      }
      $parrents = implode(', ', $parrents);
      print_r($parrents);

      ?>


print $str;
?>