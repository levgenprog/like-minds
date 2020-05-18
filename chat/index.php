<?php
require '../main/checks/user_inf.php';
?>
<!DOCTYPE html>
<html>
<!--Тест Евжения-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Making a Shoutbox with PHP and jQuery</title>

        <link rel="stylesheet" href="http://cdn.jsdelivr.net/emojione/1.3.0/assets/css/emojione.min.css"/>
        <link rel="stylesheet" href="./assets/css/styles.css" />

    </head>

    <body>
     <!--Beggining-->
        <div class="shoutbox">

            <h1 class="your_messages">Ваши сообщения <img src='./assets/img/refresh.png'/></h1>

            <ul class="shoutbox-content"></ul>

            <div class="shoutbox-form">
                <h2 class="messages">Напишите сообщение<span>×</span></h2>

                <form action="./publish.php" method="post">
                    <label for="shoutbox-name"><?=$current_user['user_name']?></label><br><br> <input type="text" id="shoutbox-name" value="<?=$current_user['user_name']?>" name="name"/>
                    <label class="shoutbox-comment-label" for="shoutbox-comment">Сообщение</label> <textarea id="shoutbox-comment" name="comment" maxlength='240'></textarea>
                    <input type="submit" value="Отправить"/>
                </form>
            </div>

        </div>



        <!-- Include jQuery and the EmojiOne library -->
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="http://cdn.jsdelivr.net/emojione/1.3.0/lib/js/emojione.min.js"></script>
        <script src="./assets/js/script.js"></script>

    </body>

</html>
