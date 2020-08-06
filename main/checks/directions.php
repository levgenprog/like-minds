<?php
//Climing the variables
if (isset($_POST['save-dir'])) {
  if (isset($_POST['goal'])) {
    $goal = filter_var(trim($_POST['goal']),
    FILTER_SANITIZE_STRING);
  }
  if (empty($_POST['category']) or empty($_POST['goal'])) {
    echo '<b><center><font size=4 color=red>Должны быть заполнены как
    минимум категория, приоритет и цель!</font></center></b>';
  }else {
    $sphere = trim($_POST['category']);
    $priority = trim($_POST['priority']);
    if (isset($_POST['demo-category'])) {
    $demo_cat = trim($_POST['demo-category']);
    }

//Pushing into the data base
    if ($current_user['id'] == $myid) {
      /*$mysql -> query("INSERT INTO `priorities` (`sphere_id`, `priority`, `user_id`)
      VALUES ('$sel', '$priority', '$myid')");
      $mysql -> query("INSERT INTO `goal_set` (`user_id`, `sphere_id`, `sub-sphere`, `goal`)
      VALUES ('$myid', '$sel', '$demo_cat', '$goal')");*/

      //the crutch starts here
      $field = mysqli_fetch_assoc(mysqli_query($mysql, "SELECT * FROM `users` WHERE `id` = '$myid'"));
        if ($field['priority_1'] == 0) {
          $mysql -> query("UPDATE `users` SET `sphere_1` = '$sphere', `sub-sphere_1` = '$demo_cat',
                          `priority_1` = '$priority', `goal_1` = '$goal' WHERE `id` = '$myid'");
        }
        elseif ($field['priority_2'] == 0) {
          $mysql -> query("UPDATE `users` SET `sphere_2` = '$sphere', `sub-sphere_2` = '$demo_cat',
                          `priority_2` = '$priority', `goal_2` = '$goal' WHERE `id` = '$myid'");
        }
        elseif ($field['priority_3'] == 0) {
          $mysql -> query("UPDATE `users` SET `sphere_3` = '$sphere', `sub-sphere_3` = '$demo_cat',
                          `priority_3` = '$priority', `goal_3` = '$goal' WHERE `id` = '$myid'");
        }else {
          echo "<b><center><font size=4 color=red>Достигнуто максимальное количество целей!</font></center></b>";
        }
      echo "<b><center><font size=4 color=red>Данные успешно сохранены. Вы можете заполнить
      еще одну форму</font></center></b>";
    }
  }
}
 ?>
