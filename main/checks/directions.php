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
    $priority = trim($_POST['priority']);
    if (isset($_POST['demo-category'])) {
      $demo_cat = trim($_POST['demo-category']);
    }

//Pushing into the data base
    if ($current_user['id'] == $myid) {
      $mysql -> query("INSERT INTO `priorities` (`sphere_id`, `priority`, `user_id`)
      VALUES ('$sel', '$priority', '$myid')");
      $mysql -> query("INSERT INTO `goal_set` (`user_id`, `sphere_id`, `sub-sphere`, `goal`)
      VALUES ('$myid', '$sel', '$demo_cat', '$goal')");
      echo "<b><center><font size=4 color=red>Данные успешно сохранены. Вы можете заполнить
      еще одну форму</font></center></b>";
    }
  }
}
 ?>
