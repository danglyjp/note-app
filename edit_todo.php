<?php
include "db_connect.php";

if (isset($_GET['edit-todo'])) {
	$edit_id = $_GET['edit-todo'];
}
if (isset($_POST['edittodo-btn'])) {
	$edit_todo = $_POST['txtTodo'];

  $query = "UPDATE todo SET todo_name = '$edit_todo' WHERE todo_id = $edit_id ";
  $run = mysqli_query($connection,$query);

  if (!$run) {
        die("Failed");
    }else{
        header("Location:index.php?updated");
    }
}
?>
<?php
// title page
$title = "編集メモ";
include "header.php";
?>

<div class="todo-header" style="margin-bottom:10px;">
    <h1 class="wcome">メーモアプリへようこそ</h1>
    <h2>メーモを編集↓</h2>
    <form class="todo-form" action="" method="POST">
        <?php
        $sql = "SELECT * FROM todo WHERE todo_id = $edit_id";
        $rlt = mysqli_query($connection,$sql);
        $data = mysqli_fetch_array($rlt);

        ?>
        <input type="text"  name="txtTodo" value="<?php echo $data['todo_name']; ?>">
        <button type="submit" name="edittodo-btn"><i class="fas fa-edit"></i> 編集メモ</button>
      </form>
<br><a href="/">ホームに戻る</a>
</div>
<?php
    include "footer.php";
?>