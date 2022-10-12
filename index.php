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
        <title>Bloco de notas</title>
    </head>
<body>
    <main>
        <div class="add-item">
            <i class="fa-solid fa-plus"></i>
        </div>
        <div class="itens">
            <div class="itens-acoes">
                <i class="fa-solid fa-trash"></i>
                <i class="fa-solid fa-pencil"></i>
            </div>
            <?php
            $query = "SELECT * FROM anotacoes;";
            $row = mysqli_query($connect, $query);
            
            $i = 0;
            while($array <= mysqli_fetch_array($row)){
                echo $array['titulo_notas'];
                
            }
            ?>
            <h1>Título</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, qui incidunt, perferendis placeat tempora maxime nihil est excepturi</p>
        </div>
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