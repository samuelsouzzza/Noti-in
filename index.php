<?php
include('db/connection.php');
    $line = "SELECT id_notas, titulo_notas, descricao_notas, DATE_FORMAT(data_notas, '%d/%m/%y') AS data_notas_formatada, DATE_FORMAT(hora_notas, '%h:%i %p') AS hora_notas_formatada FROM anotacoes ORDER BY id_notas DESC;";
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
        <link rel="shortcut icon" href="imgs/ico/favicon.ico" type="image/x-icon">
        <!-- <a href="https://www.flaticon.com/br/icones-gratis/nota" title="nota ícones">Nota ícones criados por Freepik - Flaticon</a> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
        <title>Noti-in</title>
    </head>
<body>
    <header>
        <div class="logo-wrapper">
            <img src="imgs/ico/bloco-de-anotacoes.png" alt="Logo-principal">
            <h1>Noti-in</h1>
        </div>
        <div>
            <div class="menu-suspenso">
               <ul>
                  <li><a href="#"><i class="fa-solid fa-user"></i> @samuelsouzzza</a></li>
                  <li><a href="#"><i class="fa-solid fa-envelope"></i> rssamuel17@gmail.com</a></li>
                  <li><a href="#" id="change-theme"><i class="fa-solid fa-palette"></i> Aplicar Tema Claro/Escuro</a></li>
                  <li><a href="https://github.com/samuelsouzzza/bloco-de-notas.git" target="blank"><i class="fa fa-github"></i> Abrir no GitHub</a></li>
                  <hr>
                  <li><button class="btn-options">Opções</button></li>
                  <li><button class="btn-logout">Sair</button></li>
                  
               </ul>
            </div>
            <img src="imgs/Perfil.jpg" class="img-perfil" alt="foto-de-perfil">
        </div>
    </header>
    <main>
        <div class="add-item">
            <i class="fa-solid fa-plus"></i>
        </div>
        <?php
            while($row = mysqli_fetch_array($query)){
        ?>
        <div class="itens">
            <div class="itens-header">
                <div class="itens-acoes">
                    <a href="php/deleteItem.php?del_id_nota=<?php echo $row[0];?>"><i class="fa-solid fa-trash"></i></a>
                    <a href="<?php $_SERVER['PHP_SELF'];?>?id=<?php echo $row[0];?>" class="btn-atualizar"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <div class="itens-data"><?php echo $row[3];?> • <?php echo $row[4];?></div>
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
    <section class="modal-wrapper" >
        <article class="modal-box">
            <button class="btn-fechar-modal"><i class="fa-solid fa-xmark"></i></button>
            <form action="php/insertItem.php" method="post">
                <input name="txt-titulo" class="txt-titulo" type="text"  placeholder="Título" autocomplete="off" maxlength="16">
                <textarea name="txt-descricao" type="text" class="txt-descricao" placeholder="Suas notas" maxlength="150" autofocus="on"></textarea>
                <div class="counter-box">
                    <p><label class="lbl-count"></label>/150</p>
                </div>
                <div class="box-acoes-modal">
                    <button type="submit" class="btn-save-modal"><i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </form>
        </article>
    </section>
    <section class="modal-wrapper-update" id="section-update">
        <article class="modal-box">
            <button class="btn-fechar-modal-update"><i class="fa-solid fa-xmark"></i></button>
            <form action="php/at.php" method="post">
                <input type="number" class="txt-id" disabled value="">
                <input name="txt-titulo" class="txt-titulo" type="text"  placeholder="Título" autocomplete="off" maxlength="16">
                <textarea name="txt-descricao" type="text" class="txt-descricao" placeholder="Suas notas" maxlength="150" autofocus="on"></textarea>
                <div class="counter-box">
                    <p><label class="lbl-count"></label>/150</p>
                </div>
                <div class="box-acoes-modal">
                    <button type="submit" class="btn-save-modal"><i class="fa-solid fa-floppy-disk"></i></button>
                </div>
            </form>
        </article>
    </section>
    <footer>
        <p>Alguns Direitos Reservados</p><?php echo date('Y');?>
    </footer>
<script src="js/script.js"></script>
<script src="https://kit.fontawesome.com/33170ddcd4.js" crossorigin="anonymous"></script>
</body>
</html>
