
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
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tilt+Warp&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=chevron_right" />
    <title>Usuarios</title>
</head>
<body class="bg-(--fundo)">
    <div class="w-full flex flex-col items-center pt-10">
        <h1 class="montserrat-bold text-[2.5rem]">Usuários</h1>
        <p>Deseja acrescentar um usuário novo? <a class="underline" href="http://localhost/Frontend/formulario.php">Clique aqui</a></p>
        <div class="w-full px-5 pt-10 flex flex-wrap justify-center gap-[50px]">
            <?php 
                $stmt = "SELECT * FROM usuarios";  
                $usuarios = $conn->query($stmt);
                
                foreach($usuarios as $usu){ ?>
                <div class="bg-white w-[400px] flex flex-col items-center pb-7 pt-5 rounded-md shadow-[0_10px_10px_rgba(0,0,0,0.35)]">
                    <div class="foto w-[80%] sm:w-[300px] -translate-y-10">
                        <img class="w-full rounded-md" src="<?=$usu['imagem']?>"/>
                    </div>
                    <div class="">
                        <h1 class="montserrat-light">Nome: <b><?=$usu['nome']?></b></h1>
                    </div>
                    <div class="icon">
                        
                        <?php
                            echo "<span class='material-symbols-outlined cursor-pointer' onclick=\"window.location.href='usuarios.php?id={$usu['id']}'\">chevron_right</span>";
                        ?>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>
    <!-- <script src="/Backend/Js/ajax.js" defer></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>