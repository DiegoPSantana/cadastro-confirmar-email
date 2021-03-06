<?php

  // Include para testar a conexão de banco de dados
  // include_once "conexao.php";

  // === Criando o banco de dados abaixo; 
  // create database cadastro_confirmar;

  // use database cadastro_confirmar;

  // create table usuarios(

  //   id int auto_increment primary key,
  //   nome varchar(220),
  //   email varchar(220),
  //   senha varchar(220)
  // );


  // =====================================================Gerar senha
  // Depois execute o navegador com uma senha 123456, para visualizar
  // a senha criptografada, copie e depois salve sua senha no banco de
  // dados

  echo password_hash('123456', PASSWORD_DEFAULT);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Largura do dispositvo do usuãrio -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login | MODAL</title>
</head>
<body>
    <div class="container text-center">
        <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" 
data-bs-target="#loginModal">
 Acessar 
</button>
    </div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Área Restrita</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form id="login-usuario-form">
         <span id="msgAlertErroLogin"></span>
          <div class="mb-3">
            <label for="name" class="col-form-label">Usuário:</label>
            <input type="text" name="email" class="form-control" id="email"
            placeholder="Digite o usuário">
          </div>
          <div class="mb-3">
            <label for="senha class="col-form-label>Senha:</label>
            <input type="password" name="senha" class="form-control" id="senha"
            placeholder="Digite asenha">
          </div>
          <div class="mb-3"> 
              <input type="submit" class="btn btn-outline-primary bt-sm" 
              id="login-usuario-btn" value="Acesar">
          </div>
        </form> 
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Dica para conferir se arquivo abre corretamente, atualiza a pagina e depois
ver código fonte da pagina, clique no arquivo custom.js, se ele abrir é por que 
deu certo -->
<script src="js/custom.js"></script>

</body>
</html>