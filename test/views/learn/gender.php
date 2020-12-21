
<!-- //trong learn_controller m gán cái mảng lấy được khi query ra vào words:$data = array('words' => $data);
//thì khi extract nó lấy cái words thành biến nên dùng được cái foreach $words -->

<audio controls>
  <source src="../test/assets/sound/alo.mp3" type="audio/mpeg">
</audio>
<table style="width:100%">
  <th>id</th>
  <th>user_id</th>
  <th>name_word</th>
  <th>type_word</th>
  <th>mean</th>
  <th>image</th>
  <th>sound</th>
  <th>note</th>
  <th>created_at</th>
  <th>updated_at</th>
  <?php
    foreach ($words as $arr){
      echo "<tr>";
      foreach($arr as $key => $item){
    ?>
        <td><?php echo  $item ?> </td>
    
  <?php
      }
    echo "</tr>";
  }
  ?>
</table>