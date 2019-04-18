<?php
    session_start();
    if (!isset($_SESSION['id'])) header('Location: /');
?>
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"-->
    <link rel="stylesheet" href="css/style.css">
    <title>Note</title>
</head>

<body onload="app.get()">

    <header>
        <div class="content">
            <h1>NOTE</h1>
            <div class="user">
                <button class="btn" onclick="app.logout()">Sair</button>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="menu">
            <ul>
                <li>
                    <div class="btn btn-menu">Tarefas</div>
                </li>
                <!--li>
                    <div class="btn btn-active">Projetos</div>
                </li-->
            </ul>
        </div>
        <div class="tasks">
            <form id="form" onsubmit="app.add(event, this)">
                <input type="text" id="input" placeholder="Nova tarefa" name="descricao" autofocus autocomplete="off">
            </form>
            <ul id="lista">
            </ul>
        </div>
    </div>
    <script src="js/Tarefas.js"></script>
    <script>
        let app = new Tarefas();
    </script>
</body>

</html>