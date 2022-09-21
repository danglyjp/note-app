<?php
// 日本時間
date_default_timezone_set('Asia/Tokyo');
include "db_connect.php";
include "add_todo.php";
include "delete_todo.php";
?>
<?php
// タイトル ページ
$title = "卒業制作 ホームページ";
include "header.php";
?>
<div class="todo-header">
        <h1 class="wcome">メモ帳アプリへようこそ</h1>
        <h4>メモを追加する↓</h4>
        <form class="todo-form" action="" method="POST">
            <input type="text"  name="txtTodo" placeholder="例：10時に日本語を勉強します。">
            <button type="submit"><i class="fas fa-plus-circle"></i> <span class="sm">追加</span></button>
          </form>
     <br>今日：<div id="date"></div>
    </div>
<div class="todo-content">
    <table class="table table-hover table-bordered tble">
        <thead>
          <tr>
            <th class="th1 thid" scope="col">id</th>
            <th class="th2" scope="col">メモ</th>
            <th class="th3" scope="col">日付</th>
            <th class="th4" scope="col">アクション</th>
          </tr>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                $todo_id = $row['todo_id'];
                $todo_name = $row['todo_name'];
                $todo_date = $row['todo_date'];
            ?>
          <tr>
            <th class="thid" scope="row"><?php echo $todo_id ?></th>
            <td><?php echo $todo_name ?></td>
            <td><?php echo $todo_date ?></td>
            <td><a class="btn-edit" href="edit_todo.php?edit-todo=<?php echo $todo_id; ?>"><i class="fas fa-edit"></i> <span class="sm">編集</span></a>
              <a class="btn-delete" href="index.php?delete_todo=<?php echo $todo_id; ?>"><i class="fas fa-trash"></i> <span class="sm">削除</span></a></td>
          </tr>
        </tbody>
        <?php }?>
      </table>
    </div>
    <?php
    include "footer.php";
    ?>