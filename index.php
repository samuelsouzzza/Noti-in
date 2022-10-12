<?php
include('db/connection.php');
    $line = "SELECT * FROM anotacoes;";
    $query = mysqli_query($connect, $line);
    $qtd = mysqli_num_rows($query);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="ico/favicon.ico" type="image/x-icon">
        <!-- <a href="https://www.flaticon.com/br/icones-gratis/nota" title="nota ícones">Nota ícones criados por Freepik - Flaticon</a> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
        <title>Suas Notas</title>
    </head>
<body>
    <header>
        <div>
            <img src="ico/bloco-de-anotacoes.png" alt="Logo-principal">
            <h1>Suas Notas</h1>
        </div>
        <ul>
            <li><a href="https://github.com/samuelsouzzza/bloco-de-notas.git" target="blank">Documentação no GitHub</a></li>
        </ul>
    </header>
    <main>
        <div class="add-item">
            <i class="fa-solid fa-plus"></i>
        </div>
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <div class="itens">
            <div class="itens-acoes">
                <a href="php/deleteItem.php?del_id_nota=<?php echo $row[0];?>"><i class="fa-solid fa-trash"></i></a>
                <a class="btn-atualizar" href="php/atualizarItem.php?up_nota_id=<?php echo $row[0];?>?up_nota_titulo=<?php echo '$row[1]';?>?up_nota_descricao=<?php echo '$row[2]';?>"><i class="fa-solid fa-pencil"></i></a>
            </div>
            <h1><?php echo $row[1];?></h1>
            <p><?php echo $row[2];?></p>
        </div>
        <?php } ?>
    </main>
    <section class="menu-stats">
        <div>
            <p>Número de anotações: <?php echo $qtd;?></p>
        </div>
    </section>
    <footer>
        <p>Alguns Direitos Reservados</p><?php echo date('Y');?>
    </footer>
    <section class="modal-wrapper" >
        <article class="modal-box">
            <button class="btn-fechar-modal"><i class="fa-solid fa-xmark"></i></button>
            <form action="php/inserirNotas.php" method="post">
                <input name="txt-titulo" class="txt-titulo" type="text"  placeholder="Título" autocomplete="off" maxlength="16">
                <textarea name="txt-descricao" type="text" class="txt-descricao" placeholder="Suas notas" maxlength="200"></textarea>
                <div class="counter-box">
                    <p><label class="lbl-count"></label>/200</p>
                </div>
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
