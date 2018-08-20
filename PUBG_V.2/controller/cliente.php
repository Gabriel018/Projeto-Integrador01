<?php
//importações
require("page/mensagem.php");

//Verifica se o conteudo do $_POST['nome'] existe
if (isset($_REQUEST['acao'])){
    $acao = $_REQUEST['acao'];
    if ($acao == "salvar"){ 
        //Pega os dados do cliente sem filtros
        $cliente = $_POST;
        //Chama a função para salar no banco de dados
        salvar($cliente);
    }

    if ($acao == "listar"){
        $cliente = listar($_POST['dados']);
    }
}


//Funções -----------------------------------------------
function salvar($cliente){
    //valida os dados do cliente
    $e =  validar($cliente);
    if ($e == ""){
        //Conecta no banco de dados
        $link = mysqli_connect(LOCAL, USER, PASS, BANCO);

        //Define o padrão de caracteres que irão para o banco de dados (acentuação)
        mysqli_set_charset($link,"utf8");

        $sql = htmlspecialchars("insert into endereco(cep, logradouro, cidade, bairro, uf) values ('"
        .trim($cliente['cep'])."','"
        .trim(addslashes($cliente['logradouro']))."','"
        .trim(addslashes($cliente['cidade']))."','"
        .trim(addslashes($cliente['bairro']))."','"
        .trim($cliente['uf'])."'); ");
    
        //Mostra a linha do SQL
        //var_dump($sql);

        //Salva o endereço no banco de dados
        $salvar = mysqli_query($link, $sql);  
        
        //Define um novo SQL para o cadastro do cliente
        $sql = htmlspecialchars("insert into cliente(nome, email, cep, pws) values ('"
        .trim(addslashes($cliente['nome']))."','"
        .trim(addslashes($cliente['email']))."','"
        .trim($cliente['cep'])."','"
        .crypt(trim($cliente['email']),trim($cliente['pws1']))."'); ");

        //Mostra a linha do SQL
        //var_dump($sql);

        //Salva o endereço no banco de dados
        $salvar = mysqli_query($link, $sql);

        //Verifica se cliente foi salva
        if ($salvar){
            aviso("Voce foi cadastrado com sucesso!!");
        } else {
            printf("Error: ", mysqli_error($link));
            erro("Não cadastrado");
        }

        //Fecha a conexão com o anco de dados
        mysqli_close($link);
    } else {
        //Mostra os erros da validação
        erro($e);
    }
}


function validar($c){ // $c = $cliente
    $erros = "";
    if($c['nome'] == ""){
        $erros .= "Nome em branco.</br>";
    }

    if($c['email'] == ""){
        $erros .= "E-mail em branco.</br>";
    }

    if($c['pws1'] == ""){
        $erros .= "Senha em branco.</br>";
    } elseif($c['pws1'] !== $c['pws2']){
        $erros .= "Senhas diferentes.</br>";
    }
    return $erros;
}


function listar($dados){
    $dados = $dados.'%';
    //Conecta no banco de dados
    $link = mysqli_connect(LOCAL, USER, PASS, BANCO);

    //Define o padrão de caracteres que irão para o banco de dados (acentuação)
    mysqli_set_charset($link,"utf8");

    //Define o SQL para a busca dos dados
    $sql = "SELECT * 
            FROM cliente, endereco 
            WHERE cliente.cep = endereco.cep
            and cliente.nome like '$dados'";
    
    //Mostra a linha do SQL
    //var_dump($sql);

    //Busca os dados do cliente no banco de dados
    $result = mysqli_query($link, $sql);

    //Verifica seexiste dados do cliente
    if (!$result){
        printf("Error: ", mysqli_error($link));
        alerta("Não localizado");
    }

    //Fecha a conexão com o anco de dados
    mysqli_close($link);

    return $result;      
}

    
function login($email, $pws){
    $pws = crypt($email, $pws);
    $link = mysqli_connect(LOCAL, USER, PASS, BANCO);
    mysqli_set_charset($link,"utf8");

    $sql = "select id, nome
            from cliente
            where 
                email = $email
            and 
                pws = $pws";

    $result = mysqli_query($link, $sql);
    if (mysqli_num_rows($result) == 1){
        session_start();
        $_SESSION['cliente'] = $result;
        header("Location: index.php");
    } else {
        //printf("Error: ", mysqli_error($link));
        alerta("Não localizado");
    }
    mysqli_free_result($result);
    mysqli_close($link);  
}
