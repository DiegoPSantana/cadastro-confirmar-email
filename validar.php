<?php

include_once "conexao.php";

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$dados = [
    "email" => "diego_4palco@hotmail.com",
    "senha" => "123456"
];

if(empty($dados['email'])){
    $retorna=['erro'=> true, 'msg'=>"<div class='alert alert-danger' 
    role='alert'>Erro Php usuário: Necessário preencher o campo usuário!</div>"];
} elseif(empty($dados['senha'])){
    $retorna=['erro'=> true, 'msg'=>"<div class='alert alert-danger' 
    role='alert'>Erro Php senha: Necessário preencher o campo senha!</div>" ];
} else{

    $query_usuario  = "SELECT id, nome, email, senha 
                FROM usuarios
                WHERE email=:email
                LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) and ($result_usuario->rowCount() != 0)){
      
      $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
      if(password_verify($dados['senha'], $row_usuario['senha'])){
          $retorna=['erro'=> false, 'msg'=>"<div class='alert alert-success' 
          role='alert'>Validar!</div>" ];
      }else {
          $retorna=['erro'=> true, 'msg'=>"<div class='alert alert-danger' 
          role='alert'>Usuário ou a senha inválida!</div>" ];
      }


    } else {
      $retorna=['erro'=> true, 'msg'=>"<div class='alert alert-danger' 
      role='alert'>Usuário ou a senha inválida!</div>" ];
    }

    // Apos, fazer o teste no navegador inspecionando para ver o resultado, 
    // digite um email e senha que não exista e obtenha a mensagem de invalido
    // teste depois com o email que exista e obtenha a mensagem de válido

    
}

echo json_encode($retorna);

?>