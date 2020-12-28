
<!-- //trong learn_controller gán cái mảng lấy được khi query ra vào words:$data = array('words' => $data);
//thì khi extract nó lấy cái words thành biến nên dùng được cái foreach $words -->

<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kho từ của bạn</title>
    
  <link rel="stylesheet" href="assets/css/word_form_style.css" type="text/css">
  <link rel="stylesheet" href="assets/css/home_style.css" type="text/css">
  </head>
  <body>
  <div>
  <?php include_once ('views/homepage/header.php');
  if(!empty($words)){ ?>
<table >
  <th>Số thứ tự</th>
  <th>Từ</th>
  <th>Loại từ</th>
  <th>Nghĩa</th>
  <th>Hình ảnh</th>
  <th>Phát âm</th>
  <th>Ghi chú</th>
  <th>Ngày tạo</th>
  <th>Ngày sửa</th>
  <th> Thao tác</th>
  <?php
  
  $i = 1;  
    foreach ($words as $arr){
      echo "<tr>";
      //echo $arr['image'];
      //foreach($arr as $key => $item){
    ?>
        <td><?php echo  $i ?> </td> 
        <?php $i++; ?>
        <td><?php echo  $arr['name_word']; ?> </td>
        <td><?php echo  $arr['type_word']; ?> </td>
        <td><?php echo  $arr['mean']; ?> </td>
        <td><img style=" width: 80px; height: 80px;  margin :auto; display: block;" src='<?php echo $arr['image'] ?>' alt="Không có hình ảnh"> </td>
        <td><audio controls><source src="<?php echo $arr['sound'] ?>" type="audio/mpeg"></audio> </td>
        <td><?php echo  $arr['note']; ?> </td>
        <td><?php echo  $arr['created_at']; ?> </td>
        <td><?php echo  $arr['updated_at']; ?> </td>
        <td>
          <!-- <form method="POST" >
            <input type="text" hidden name="id" value="<?php echo $arr['id']; ?>"> -->
            <a href = "../test/index.php?controller=learn&action=update&id=<?php echo $arr['id']?>"> <button name='update'>Sửa từ</button> 
          <!-- </form> -->
          <form method="POST" >
            <input type="text" hidden name="id" value="<?php echo $arr['id']; ?>">
            <button name='delete'> Xóa từ </button>
          </form>
        <td>
        </table>
  <?php
    } 
    echo "</tr>";
} else { ?>
    <dialog open style="color: green; text-align: center; display: middle">
        <p>Không tồn tại từ bạn tìm kiếm!</p>
        <p> Hãy xem trong: Kho từ của bạn </p>
        <a href="../test/index.php?controller=learn&action=gender"><button>OK</button></a>
    </dialog>
<?php }?>
</div>
<?php include_once ('views/homepage/footer.php'); ?>
  </body>
