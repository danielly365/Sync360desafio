<?php
 include '../Backend/conexao.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/Frontend/Css/custom.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tilt+Warp&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Usuario</title>
</head>
<body class="bg-(--fundo)">
    <div class="flex flex-col items-center w-full">
        <div class="bg-white p-5 w-[90%] md:w-2xl flex flex-col items-center my-10 rounded-md shadow-[0_10px_10px_rgba(0,0,0,0.35)]">
            <?php 
                $id = $_GET['id'];
                $query = $conn ->prepare ("SELECT * FROM usuarios WHERE id = ?");
                $query->bind_param('i',$id);
                $query->execute();
                $result = $query->get_result();

                foreach($result as $usu){
            ?>
            <div class="w-[90%] md:w-[500px] flex justify-center">
                <img class="rounded-md" src="<?=$usu['imagem']?>"/>
            </div>
            <div class="flex flex-col gap-5 py-5 md:px-[41px]">
                <h1 class="montserrat-light">Nome: <?=$usu['nome']?></h1>
                <h1 class="montserrat-light">Idade: <?=$usu['idade']?></h1>
                <h1 class="montserrat-light">Endereço: <?=$usu['endereco']?></h1>
                <h1 class="montserrat-light">Biografia: <?=$usu['biografia']?></h1>
            </div>
            <div class="w-full flex justify-between md:px-[41px]">
                <?php
                echo "<i class='material-icons cursor-pointer' onclick=\"deleta({$usu['id']})\">delete</i>";
                
                echo "<i class='material-icons cursor-pointer' onclick=\"window.location.href='editar.php?id={$usu['id']}'\">edit_square</i>";
                ?>
            </div>
            
            <?php } ?>
        </div>
    </div>
    <script src="/Backend/js/ajax.js"></script>
</body>
</html>