<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Todo list</title>
</head>
<body>
    <div class="container">
        <h1> Список дел </h1>
        <form action="/add.php" method="post">
            <input class="form-control" type="text" name="list" id ="list" placeholder="Введите текст заметки...">
            <button class="btn btn-danger" type="submit" name="send"> Добавить </button>
        </form>
        <?php
            require 'config.php';
            echo '<ul>';

            $query = $pdo->query('SELECT * FROM `mydata`');
            while($tmp = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li><b>'.$tmp->data.'</b><a href="del.php?id='.$tmp->id.'"><button class="btn btn-danger"> Удалить</button></a></li>';
            }
            echo '</ul>';
        ?>
    </div>
</body>
</html>
