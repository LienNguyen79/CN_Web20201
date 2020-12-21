
<!-- //trong learn_controller gán cái mảng lấy được khi query ra vào words:$data = array('words' => $data);
//thì khi extract nó lấy cái words thành biến nên dùng được cái foreach $words -->

<!-- <audio controls>
  <source src="../test/assets/sound/alo.mp3" type="audio/mpeg">
</audio> -->
<table style="width:100%">
  <!-- <th>Số thứ tự</th> -->
  <th>Từ</th>
  <th>Loại từ</th>
  <th>Nghĩa</th>
  <th>Hình ảnh</th>
  <th>Phát âm</th>
  <th>Ghi chú</th>
  <th>Ngày tạo</th>
  <th>Ngày sửa</th>
  <?php    
    foreach ($words as $arr){
      echo "<tr>";
      //echo $arr['image'];
      //foreach($arr as $key => $item){
    ?>
        <!-- <td><?php echo  $arr['id']; ?> </td> -->
        <td><?php echo  $arr['name_word']; ?> </td>
        <td><?php echo  $arr['type_word']; ?> </td>
        <td><?php echo  $arr['mean']; ?> </td>
        <td><img src='<?php $arr['image'] ?>' alt="Italian Trulli"> </td>
        <td><audio controls><source src="<?php $arr['sound'] ?>" type="audio/mpeg"></audio> </td>
        <td><?php echo  $arr['note']; ?> </td>
        <td><?php echo  $arr['created_at']; ?> </td>
        <td><?php echo  $arr['updated_at']; ?> </td>
        
  <?php
      }
    echo "</tr>";
      
  ?>
</table>