<?php
    require("conexao.php");

    $id = $_POST['id'];

    $query = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
    $query->bind_param('i',$id);
    $query->execute();
?>