<table>
  <?php
  echo "";
  for( $r = 0;$r < 8;$r++) {
    echo "<tr>";
      for ( $c = 0; $c < 8;$c++) {
        $total = $r + $c;
          if($total % 2 == 0){
            echo '<td style = "height :30px; width:30px; background-color: black;"></td>';
            }else {
            echo '<td style = "height :30px; width:30px; background-color: white;"></td>';
              }
        }
    echo "</tr>";
}
?>

</table>