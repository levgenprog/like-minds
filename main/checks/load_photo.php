<?php
require 'user_inf.php';
  if (isset($_POST['upload'])) {
    if (isset($_FILES['uploadfile'])) {
      $photo_name = time()."_".basename($_FILES['uploadfile']['name']);
       //$error_flag = $_FILES['uploadfile']['errors'];

       //if ($error_flag == 0) {
         $upfile = getcwd()."/images/profile_photos/".time()."_".
         basename(iconv('utf-8', 'windows-1251',
         $_FILES['uploadfile']['name']));

         if ($_FILES['uploadfile']['tmp_name']) {
           $allowed = array('jpg', 'jpeg', 'png');
           $ext = pathinfo($_FILES['uploadfile']['name'],
            PATHINFO_EXTENSION);
            mysqli_query ($mysql, "UPDATE `users`
             SET `photo` = '$photo_name'  WHERE `id` = '{$current_user['id']}'");
             echo "<b><center><font size=4 color=red>Данные сохранены успешно</font></center></b>";
            if (!in_array($ext, $allowed)) {
              $errors[] = "Неверный формат";
            }
            elseif (!move_uploaded_file($_FILES['uploadfile']['tmp_name'],
                    $upfile)) {


            }
       }
       //}
    }elseif ($_FILES['uploadfile']['size'] == 0) {
      $errors = "Выберите изображение:";
  }
  }
 ?>
