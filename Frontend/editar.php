
<?php
    include '../Backend/conexao.php'
?>
<!-- <table >
            <thead class="">
                <tr>
                    <th>Imagem de perfil</th>
                    <th>Nome Completo</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Biografia</th>
                </tr>
            </thead>

            <?php 
                $stmt = "SELECT * FROM usuarios";  
                $usuarios = $conn->query($stmt);
                
                foreach($usuarios as $usu){?>
            <tbody>
                <tr>
                    <td><?= $usu['imagem'] ?></td>
                    <td><?= $usu['nome'] ?></td>
                    <td><?= $usu['idade'] ?></td>
                    <td><?= $usu['endereco'] ?></td>
                    <td><?= $usu['biografia'] ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table> -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="/Frontend/Css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Usuarios</title>
</head>
<body class="bg-(--fundo)">
    <div class="w-full flex justify-center">
        <div class="w-[90%] md:w-[800px] bg-white rounded-md px-5 mt-5 p-5 shadow-[0_10px_10px_rgba(0,0,0,0.35)]">
            <?php 
                $id = $_GET['id'];

                $query = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
                $query->bind_param('i',$id);
                $query->execute();
                $result = $query->get_result();

                
                
                foreach($result as $usu){?>
            <form id="editar" method="post" class="grid grid-cols-2 gap-2" enctype="multipart/form-data">
                <div class="flex flex-col relative col-span-2 md:col-start-1 md:col-span-1">
                    <i class="fa fa-photo absolute bottom-[18px] left-[10px]"></i>
                    <label for="formFile" class="form-label">Escolha uma imagem</label>
                    <input class="form-control border h-[40px] rounded-2xl px-2 pl-[27px]" type="file" id="imagem" name="imagem" accept="image/*">
                </div>
                <div class="flex flex-col relative col-span-2 md:col-start-2 ">
                    <i class="fa fa-user absolute bottom-[12px] left-[10px]"></i>
                    <label class="form-label">Nome:</label>
                    <input class="border h-[40px] rounded-2xl pl-[27px]" type="text" id="nome" name="nome" value= "<?=$usu['nome']?>"> 
                </div>
                <div class="flex flex-col relative col-span-2 md:col-start-1 md:col-span-1">
                    <i class="fa fa-birthday-cake absolute bottom-[12px] left-[10px]"></i>
                    <label class="form-label">Idade:</label>
                    <input class="border h-[40px] rounded-2xl pl-[35px]" type="number" id="idade" name="idade" value= "<?=$usu['idade']?>"> 
                </div>
                <div class="flex flex-col relative col-span-2 md:col-start-2">
                    <i class="fa fa-map-marker absolute bottom-[12px] left-[10px]"></i>
                    <label class="form-label">Endereço:</label>
                    <input class="border h-[40px] rounded-2xl pl-[27px]" type="text" id="endereco" name="endereco" value= "<?=$usu['endereco']?>"> 
                </div>
                <div class="col-span-2 flex flex-col relative">
                    <i class="fa fa-hashtag absolute bottom-[53px] left-[10px]"></i>
                    <label for="exampleFormControlTextarea1" class="form-label">Biografia</label>
                    <textarea class="form-control border h-[75px] rounded-md pl-[27px]" id="biografia" name="biografia"><?=$usu['biografia']?></textarea>
                </div>
                <input type="hidden" name="id" value="<?= $usu['id'] ?>">
                <div class="col-span-2 flex justify-center pb-5">
                    <button class="border rounded-md p-1 w-[70px]" type="submit" id="btnEnviar">Enviar</button>
                </div>
            </form>
            <?php } ?>
        </div>
    </div>
    <script src="/Backend/Js/ajax.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>