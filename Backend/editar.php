<?php
    require("conexao.php");
    // $imagem = $_POST['imagem'];
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $biografia = $_POST['biografia'];

    if(isset($_FILES['imagem']) && $_FILES['imagem']['error']==0){
        $pasta = '../uploads/';
        $nomeImagem = uniqid() . "_" . $_FILES['imagem']['name'];
        $caminhoImagem = $pasta . $nomeImagem;

        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminhoImagem)){
            $query = $conn->prepare("UPDATE usuarios SET imagem = ?, nome = ?, idade = ?, endereco = ?, biografia = ? WHERE id = ?");
            $query->bind_param('ssissi',$caminhoImagem,$nome,$idade,$endereco,$biografia,$id);
            $query->execute();
        } else{
            echo "Erro em mover imagem";
        }
    }else{
        $query = $conn->prepare("UPDATE usuarios SET  nome = ?, idade = ?, endereco = ?, biografia = ? WHERE id = ?");
        $query->bind_param('sissi',$nome,$idade,$endereco,$biografia,$id);
        $query->execute();
    }
    


?>