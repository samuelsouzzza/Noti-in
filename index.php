<?php
include('db/connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
        <title>Bloco de notas</title>
    </head>
<body>
    <main>
        <div class="add-item">
            <i class="fa-solid fa-plus"></i>
        </div>
        <?php
            $line = "SELECT * FROM anotacoes;";
            $query = mysqli_query($connect, $line);
           
            while($row = mysqli_fetch_array($query)){
        ?>
        <div class="itens">
            <div class="itens-acoes">
                <a href="php/deleteItem.php"><i class="fa-solid fa-trash"></i></a>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <h1><?php echo $row[1];?></h1>
            <p><?php echo $row[2];?></p>
        </div>
        <?php
            }
        ?>
    </main>
    <section class="modal-wrapper">
        <article class="modal-box">
            <button class="btn-fechar-modal"><i class="fa-solid fa-xmark"></i></button>
            <form action="php/inserirNotas.php" method="post">
                <input name="txt-title" type="text" class="txt-titulo" placeholder="Título" autocomplete="off">
                <textarea name="txt-descricao" type="text" class="txt-descricao" placeholder="Suas notas"></textarea>
                <div class="box-acoes-modal">
                    <button type="submit" class="btn-save-modal"><i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </form>
        </article>
    </section>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/33170ddcd4.js" crossorigin="anonymous"></script>
</body>
</html>