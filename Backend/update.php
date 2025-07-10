<?php
    require("conexao.php");
    // $imagem = $_POST['imagem'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $biografia = $_POST['biografia'];

    if(isset($_FILES['imagem']) && $_FILES['imagem']['error']==0){
        $pasta = '../uploads/';
        $nomeImagem = uniqid() . "_" . $_FILES['imagem']['name'];
        $caminhoImagem = $pasta . $nomeImagem;

        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)){
            $query = $conn->prepare("INSERT INTO usuarios (imagem, nome, idade, endereco, biografia) VALUES (?, ?, ?, ?, ?)");
            $query->bind_param('ssiss',$caminhoImagem,$nome,$idade,$endereco,$biografia);
            $query->execute();
        } else{
            echo "Erro em mover imagem";
        }
    }else{
        echo "Nenhuma enviada para upload";
    }
    


?>