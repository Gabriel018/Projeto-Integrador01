<?php
    $cadastro = $_POST;
    $e =  validar($cadastro);
    if ($e == ""){
        $link = mysqli_connect("127.0.0.1", "root", "", "Projeto_game");

        //$sql  = 'INSERT INTO `cliente` (`id`, `nome`, `email`, `pws`) VALUES (NULL, \'Ana\', \'ana@ana.com\', \'111111\')';
       
        $sql = "insert into cliente (nome, email, senha) values ('"
                .$cadastro['nome']."' , '"
                .$cadastro['email']."' , sha1("
                .$cadastro['senha']."))";

        $salvar = mysqli_query($link, $sql);
        if ($salvar){
            echo "Cadastrado";
        } else {
            printf("Error: ", mysqli_error($link));
            echo "Não cadastrado";
        }
    } else {
        echo $e;
    }