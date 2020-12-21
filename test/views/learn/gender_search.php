
<table style="width:100%">
<th>id</th>
<th>user_id</th>
<th>name_word</th>
<th>type_word</th>
<th>mean</th>
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